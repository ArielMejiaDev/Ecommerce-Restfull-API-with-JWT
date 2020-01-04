<?php namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

trait ApiExceptionTrait
{
    public function apiException($request, $exception)
    {
        
        if ($this->isModelNotFoundException($exception)) {
            return $this->ModelNotFoundResponse();
        }
        if ($this->isHttpNotFoundException($exception)) {
            return $this->httpNotFoundResponse();
        }
        return parent::render($request, $exception);
    }

    protected function isModelNotFoundException($exception)
    {
        return $exception instanceOf ModelNotFoundException; 
    }

    protected function modelNotFoundResponse()
    {
        return response()->json([
            'errors' => 'Model not found'
        ], Response::HTTP_NOT_FOUND);
    }

    protected function isHttpNotFoundException($exception)
    {
        return $exception instanceOf NotFoundHttpException;
    }

    protected function httpNotFoundResponse()
    {
        return response()->json([
            'errors' => 'Route not found'
        ], Response::HTTP_NOT_FOUND);
    }
}
