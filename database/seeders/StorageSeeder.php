<?php

namespace Database\Seeders;

use App\Models\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StorageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $storages = [
            ['name' => '16GB'],
            ['name' => '32GB'],
            ['name' => '64GB'],
            ['name' => '128GB'],
            ['name' => '256GB'],
            ['name' => '512GB'],
            ['name' => '1TB']
        ];

        foreach($storages as $storage) {
            Storage::updateOrCreate($storage);
        }
    }
}
