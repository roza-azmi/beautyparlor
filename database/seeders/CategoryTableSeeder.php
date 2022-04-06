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
            'customer_name'=>'x',
            'service_type'=>'x',
            'service_price'=>'10.6',
            'service_shift'=>'day',
            
            
            
            
    
            ]
    );
    }
}
