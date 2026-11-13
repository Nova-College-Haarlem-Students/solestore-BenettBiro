<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sneaker;

class SneakersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sneakers = [
            [
                'name' => 'Nike Air Force 1 \'07',
                'description' => 'Klassieke basketbalsneaker met Air-demping en een tijdloos design.',
                'price' => 119.99,
                'size' => 42,
                'material' => 'Leer',
                'color' => 'Wit',
            ],
            [
                'name' => 'Nike Air Max 90',
                'description' => 'Iconische runner met zichtbare Air-unit in de hiel.',
                'price' => 139.99,
                'size' => 43,
                'material' => 'Leer en mesh',
                'color' => 'Zwart',
            ],
            [
                'name' => 'Puma Suede Classic XXI',
                'description' => 'Retro sneaker met zachte suède bovenkant en rubberen zool.',
                'price' => 89.99,
                'size' => 41,
                'material' => 'Suède',
                'color' => 'Blauw',
            ],
            [
                'name' => 'Puma RS-X',
                'description' => 'Chunky sneaker met opvallend kleurenspel en extra demping.',
                'price' => 109.99,
                'size' => 44,
                'material' => 'Mesh en synthetisch',
                'color' => 'Grijs',
            ],
            [
                'name' => 'Adidas Samba OG',
                'description' => 'Voetbalschoen uit de jaren 50, nu een straatklassieker.',
                'price' => 109.99,
                'size' => 42,
                'material' => 'Leer',
                'color' => 'Zwart',
            ],
            [
                'name' => 'Adidas Superstar',
                'description' => 'Herkenbaar door de shell toe en de drie strepen.',
                'price' => 99.99,
                'size' => 40,
                'material' => 'Leer',
                'color' => 'Wit',
            ],
            [
                'name' => 'New Balance 574',
                'description' => 'Comfortabele lifestyle sneaker met ENCAP-demping.',
                'price' => 99.99,
                'size' => 43,
                'material' => 'Suède en mesh',
                'color' => 'Grijs',
            ],
            [
                'name' => 'Converse Chuck Taylor All Star',
                'description' => 'Canvas sneaker, al tientallen jaren een vaste favoriet.',
                'price' => 64.99,
                'size' => 41,
                'material' => 'Canvas',
                'color' => 'Rood',
            ],
            [
                'name' => 'Vans Old Skool',
                'description' => 'Skateschoen met de bekende zijstreep en stevige zool.',
                'price' => 84.99,
                'size' => 44,
                'material' => 'Canvas en suède',
                'color' => 'Zwart',
            ],
            [
                'name' => 'ASICS Gel-Kayano 14',
                'description' => 'Hardloopschoen met GEL-demping en retro look.',
                'price' => 159.99,
                'size' => 45,
                'material' => 'Mesh en synthetisch',
                'color' => 'Zilver',
            ],
        ];

      Sneaker::insert($sneakers);
}
}