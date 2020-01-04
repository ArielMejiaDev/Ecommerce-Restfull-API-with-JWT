<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'product_id'    => factory(Product::class),
        'customer'      =>  $faker->name, 
        'review'        =>  $faker->paragraph,
        'stars'         =>  $faker->numberBetween(1, 5)
    ];
});
