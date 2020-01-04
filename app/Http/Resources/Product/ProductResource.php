<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name'      => $this->name, 
            'detail'    => $this->detail,
            'price'     => $this->price,
            'stock'     => $this->getStockResponse($this->stock),
            'discount'  => $this->discount, 
            'rating'    => $this->calculateRating($this->reviews),
            'totalPrice' => round((1 - ($this->discount/100)) * $this->price, 2),
            'href'      => [
                'reviews'   => route('reviews.index', $this->id)
            ]
        ];
    }

    public function calculateRating($reviews)
    {
        return $reviews->sum('stars') > 0 ? round($reviews->sum('stars') / $reviews->count('stars'), 2) : 'No reviews available';
    }

    public function getStockResponse($stock)
    {
        return $stock > 0 ? $stock : 'No stock available';
    }
}
