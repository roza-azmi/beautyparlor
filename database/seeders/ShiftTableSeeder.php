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
        Shift::create(
            [
            // db coloum name || value
            'Customer_Name'=>'x',
            'Date'=>'11.3.22',
            'Time'=>'10',
            'Phone_number'=>'01',
           
    
            ]
    );
    }
}
