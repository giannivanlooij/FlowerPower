<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Gemengd boeket roze/rood',
            'price' => 14.99,
            'description' => '',
            'image' => ''
        ]);
        Product::create([
            'name' => 'Milou geel Vers Boeket Bloemen',
            'price' => 12.50,
            'description' => '',
            'image' => ''
        ]);
        Product::create([
            'name' => 'Milou oranje Vers Boeket Bloemen',
            'price' => 13.65,
            'description' => '',
            'image' => ''
        ]);
    }
}