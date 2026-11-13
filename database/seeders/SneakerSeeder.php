<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;
use App\Models\Sneaker;

class SneakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

public function run(): void
{
    $brands = Brand::pluck('id', 'name');   // ['Nike' => 1, 'Adidas' => 2, ...]

    $sneakers = [
        ['name' => 'Air Force 1 Low', 'colorway' => 'Triple White', 'release_year' => 1982, 'description' => 'Klassieke basketbalsneaker met Air-demping.', 'brand' => 'Nike'],
        ['name' => 'Air Max 90', 'colorway' => 'Infrared', 'release_year' => 1990, 'description' => 'Runner met zichtbare Air-unit.', 'brand' => 'Nike'],
        ['name' => 'Dunk Low', 'colorway' => 'Panda', 'release_year' => 2021, 'description' => 'Zwart-witte skate-sneaker.', 'brand' => 'Nike'],
        ['name' => 'Samba OG', 'colorway' => 'Cloud White / Core Black', 'release_year' => 1950, 'description' => 'Oorspronkelijk een voetbalschoen.', 'brand' => 'Adidas'],
        ['name' => 'Superstar', 'colorway' => 'Cloud White / Core Black', 'release_year' => 1970, 'description' => 'Herkenbaar aan de shell toe.', 'brand' => 'Adidas'],
        ['name' => 'Gazelle', 'colorway' => 'Core Black', 'release_year' => 1966, 'description' => 'Suède sneaker met retro look.', 'brand' => 'Adidas'],
        ['name' => 'Suede Classic', 'colorway' => 'Peacoat', 'release_year' => 1968, 'description' => 'Zachte suède sneaker.', 'brand' => 'Puma'],
        ['name' => 'RS-X', 'colorway' => 'Reinvention', 'release_year' => 2018, 'description' => 'Chunky sneaker met veel kleur.', 'brand' => 'Puma'],
        ['name' => '574', 'colorway' => 'Grey', 'release_year' => 1988, 'description' => 'Comfortabele lifestyle sneaker.', 'brand' => 'New Balance'],
        ['name' => 'Chuck Taylor All Star', 'colorway' => 'Black', 'release_year' => 1917, 'description' => 'Canvas sneaker, al ruim een eeuw populair.', 'brand' => 'Converse'],
    ];

    foreach ($sneakers as $sneaker) {
        Sneaker::create([
            'name' => $sneaker['name'],
            'colorway' => $sneaker['colorway'],
            'release_year' => $sneaker['release_year'],
            'description' => $sneaker['description'],
            'brand_id' => $brands[$sneaker['brand']],
        ]);
    }
}
}
