<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create(
            [
            // db coloum name || value
            'shampo'=>'dove',
            'lotion'=>'nivea',
            'cream'=>'olay',
            'shower_gel'=>'10',
            'hair_color'=>'10',
            'facial_product'=>'10',
            'hair_product'=>'10',

    
            ]
    );
    }
    
}
