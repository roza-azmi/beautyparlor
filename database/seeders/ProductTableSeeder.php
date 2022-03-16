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
            'shampo'=>'x',
            'lotion'=>'1',
            'cream'=>'12.0',
            'shower_gel'=>'10.0',
            'hair_color'=>'10.0',
            'facial_product'=>'10.0',
    
            ]
    );
    }
}
