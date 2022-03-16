<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create(
            [
            // db coloum name || value
            'category_name'=>'x',
            'service-details'=>'x',
            'price'=>'10.6',
            
            
            
    
            ]
    );
    }
}
