<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   

//bovenin de seeder voeg je de volgende code toe:


//in de run methode voeg je de volgende code toe:
    public function run()
    {
        $categories = [
            [
                'name' => 'Nike',
                'description' => 'Nike is an american brand',
                'country'=> 'America'
            ],
            [
                'name' => 'Puma',
                'description' => 'Puma is an american brand',
                'country'=>'America'
            ],
            [
                'name' => 'Dat',
                'description' => 'Hidde',
                'country' => 'Links'

            ]
        ];

        Category::insert($categories);
    }
}
