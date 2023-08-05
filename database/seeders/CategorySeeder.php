<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'SamSung', 'description' => 'SamSung is big technology company, most of popular is smartphone'],
            ['name' => 'Iphone', 'description' => 'Iphone is big technology company, most of popular is smartphone'],
            ['name' => 'Oppo', 'description' => 'Oppo is big technology company, most of popular is smartphone'],
            ['name' => 'Xiaomi', 'description' => 'Xiaomi is big technology company, most of popular is smartphone'],
            ['name' => 'Nokia', 'description' => 'Nokia is big technology company, most of popular is smartphone']
        ];

        foreach($categories as $category) {
            Category::updateOrCreate($category);
        }
    }
}
