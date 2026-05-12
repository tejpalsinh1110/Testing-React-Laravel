<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'img' => 'product/1.png',
                'brand' => 'Adidas',
                'title' => 'Adidas Running shoes',
                'rating' => 4.5,
                'reviews' => 180,
                'sellPrice' => 2999.00,
                'orders' => '350',
                'mrp' => '4999',
                'discount' => 50,
                'category' => 'men',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'img' => 'product/2.png',
                'brand' => 'Puma',
                'title' => 'Puma Sneaker',
                'rating' => 4.2,
                'reviews' => 170,
                'sellPrice' => 3999.00,
                'orders' => '250',
                'mrp' => '6999',
                'discount' => 12,
                'category' => 'woman',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
