<?php

use App\Product;
use App\Review;
use App\User;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productOne = factory(Product::class)->create([
            'user_id'   => User::first()->id
        ]);

        $productTwo = factory(Product::class)->create([
            'user_id'   => User::first()->id
        ]);

        $productThree = factory(Product::class)->create([
            'stock' => 0,
            'user_id'   => User::first()->id
        ]);
        
        factory(Review::class)->create([
            'product_id'    => $productOne->id,
            'stars'         => 5
        ]);
        
        factory(Review::class)->create([
            'product_id'    => $productOne->id,
            'stars'         => 4
        ]);

        factory(Review::class)->create([
            'product_id'    => $productOne->id,
            'stars'         => 3
        ]);

        factory(Review::class)->create([
            'product_id'    => $productTwo->id,
            'stars'         => 0
        ]);

        factory(Review::class)->create([
            'product_id'    => $productThree->id,
        ]);

        factory(Review::class, 50)->create();
    }
}
