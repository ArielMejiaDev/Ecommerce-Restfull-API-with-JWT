<?php

namespace App\Http\Resources\Product;

//use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\Resource; //before the class exteds from Resource Collection

class ProductCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name, 
            'discount'  => $this->discount,
            'totalPrice' => round((1 - ($this->discount/100)) * $this->price, 2), 
            'rating'    => $this->calculateRating($this->reviews),
            'href'  => [
                'link' => route('products.show', $this->id)
            ]
        ];
    }

    public function calculateRating($reviews)
    {
        return $reviews->sum('stars') > 0 ? round($reviews->sum('stars') / $reviews->count('stars'), 2) : 'No reviews available';
    }
}
