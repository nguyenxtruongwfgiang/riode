<?php

namespace Database\Seeders;

use App\Models\Shipping;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShippingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shippingMethods = [
            ['type' => 'Giao hang nhanh', 'price' => 25000],
            ['type' => 'Giao hang tiet kiem', 'price' => 15000],
            ['type' => 'Hoa toc', 'price' => 35000]
        ];

        foreach($shippingMethods as $shipping) {
            Shipping::updateOrCreate($shipping);
        }
    }
}
