<?php

namespace Database\Seeders;
use App\Models\Sift;
use Illuminate\Database\Seeder;

class SiftTableSeeder extends Seeder
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
            'day_shift'=>'10',
            'night_shift'=>'11',
           
    
            ]
    );
    }
}
