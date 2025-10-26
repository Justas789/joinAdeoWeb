<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::truncate();

        Product::insert([
            ['name' => 'Skėtis', 'type' => 'umbrella', 'price' => 9.99],
            ['name' => 'Žieminė striukė', 'type' => 'winter', 'price' => 89.99],
            ['name' => 'Sniego batai', 'type' => 'winter', 'price' => 69.99],
            ['name' => 'Marškinėliai', 'type' => 'summer', 'price' => 14.99],
            ['name' => 'Kepurė', 'type' => 'neutral', 'price' => 7.99],
        ]);
    }
}
