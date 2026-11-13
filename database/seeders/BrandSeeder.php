<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
  

public function run(): void
{
    $brands = [
        ['name' => 'Nike', 'country' => 'Verenigde Staten', 'description' => 'Sportmerk uit Oregon.'],
        ['name' => 'Adidas', 'country' => 'Duitsland', 'description' => 'Sportmerk uit Herzogenaurach.'],
        ['name' => 'Puma', 'country' => 'Duitsland', 'description' => 'Sportmerk uit Herzogenaurach.'],
        ['name' => 'New Balance', 'country' => 'Verenigde Staten', 'description' => 'Sportmerk uit Boston.'],
        ['name' => 'Converse', 'country' => 'Verenigde Staten', 'description' => 'Bekend om canvas sneakers.'],
    ];

    foreach ($brands as $brand) {
        Brand::create($brand);
    }
}
}
