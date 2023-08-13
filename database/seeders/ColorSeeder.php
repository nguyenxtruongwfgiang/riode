<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            ['display_name' => 'Black', 'value' => '#050505'],
            ['display_name' => 'White', 'value' => '#fff'],
            ['display_name' => 'Yellow', 'value' => '#e09d0b'],
            ['display_name' => 'Red', 'value' => '#8a0303'],
            ['display_name' => 'Blue', 'value' => '#0d0459']
        ];

        foreach($colors as $color) {
            Color::updateOrCreate($color);
        }
    }
}
