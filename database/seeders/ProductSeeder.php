<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Iphone 14 Promax', 'image' => fake()->imageUrl, 'price' => 31000000, 'category_id' => 2, 'quantity' => 30],
            ['name' => 'Iphone 13 Promax', 'image' => fake()->imageUrl, 'price' => 28000000, 'category_id' => 2, 'quantity' => 30],
            ['name' => 'Iphone 12 Promax', 'image' => fake()->imageUrl, 'price' => 20000000, 'category_id' => 2, 'quantity' => 30],
            ['name' => 'SamSung S22 Ultra', 'image' => fake()->imageUrl, 'price' => 31000000, 'category_id' => 1, 'quantity' => 30],
            ['name' => 'XiaoMi Note 10', 'image' => fake()->imageUrl, 'price' => 31000000, 'category_id' => 3, 'quantity' => 30],
            ['name' => 'Iphone 14 Promax', 'image' => fake()->imageUrl, 'price' => 31000000, 'category_id' => 2, 'quantity' => 30],
            ['name' => 'Iphone 13 Promax', 'image' => fake()->imageUrl, 'price' => 28000000, 'category_id' => 2, 'quantity' => 30],
            ['name' => 'Iphone 12 Promax', 'image' => fake()->imageUrl, 'price' => 20000000, 'category_id' => 2, 'quantity' => 30],
            ['name' => 'SamSung S22 Ultra', 'image' => fake()->imageUrl, 'price' => 31000000, 'category_id' => 1, 'quantity' => 30],
            ['name' => 'XiaoMi Note 10', 'image' => fake()->imageUrl, 'price' => 31000000, 'category_id' => 3, 'quantity' => 30],
            ['name' => 'Iphone 14 Promax', 'image' => fake()->imageUrl, 'price' => 31000000, 'category_id' => 2, 'quantity' => 30],
            ['name' => 'Iphone 13 Promax', 'image' => fake()->imageUrl, 'price' => 28000000, 'category_id' => 2, 'quantity' => 30],
            ['name' => 'Iphone 12 Promax', 'image' => fake()->imageUrl, 'price' => 20000000, 'category_id' => 2, 'quantity' => 30],
            ['name' => 'SamSung S22 Ultra', 'image' => fake()->imageUrl, 'price' => 31000000, 'category_id' => 1, 'quantity' => 30],
            ['name' => 'XiaoMi Note 10', 'image' => fake()->imageUrl, 'price' => 31000000, 'category_id' => 3, 'quantity' => 30],
            ['name' => 'Iphone 14 Promax', 'image' => fake()->imageUrl, 'price' => 31000000, 'category_id' => 2, 'quantity' => 30],
            ['name' => 'Iphone 13 Promax', 'image' => fake()->imageUrl, 'price' => 28000000, 'category_id' => 2, 'quantity' => 30],
            ['name' => 'Iphone 12 Promax', 'image' => fake()->imageUrl, 'price' => 20000000, 'category_id' => 2, 'quantity' => 30],
            ['name' => 'SamSung S22 Ultra', 'image' => fake()->imageUrl, 'price' => 31000000, 'category_id' => 1, 'quantity' => 30],
            ['name' => 'XiaoMi Note 10', 'image' => fake()->imageUrl, 'price' => 31000000, 'category_id' => 3, 'quantity' => 30],
            ['name' => 'Iphone 14 Promax', 'image' => fake()->imageUrl, 'price' => 31000000, 'category_id' => 2, 'quantity' => 30],
            ['name' => 'Iphone 13 Promax', 'image' => fake()->imageUrl, 'price' => 28000000, 'category_id' => 2, 'quantity' => 30],
            ['name' => 'Iphone 12 Promax', 'image' => fake()->imageUrl, 'price' => 20000000, 'category_id' => 2, 'quantity' => 30],
            ['name' => 'SamSung S22 Ultra', 'image' => fake()->imageUrl, 'price' => 31000000, 'category_id' => 1, 'quantity' => 30],
            ['name' => 'XiaoMi Note 10', 'image' => fake()->imageUrl, 'price' => 31000000, 'category_id' => 3, 'quantity' => 30]
        ];

        foreach($products as $product) {
            Product::updateOrCreate($product);
        }
    }
}
