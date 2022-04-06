<?php

namespace Database\Seeders;
 use App\Models\Servicelist;
use Illuminate\Database\Seeder;

class ServicelistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Servicelist::create(
            [
            // db coloum name || value
            'service_name'=>'x',
            'service_types'=>'y',
            'service_quatity'=>'1',
            'service_price'=>'10.0',
            
            ]
    );
    }
}
