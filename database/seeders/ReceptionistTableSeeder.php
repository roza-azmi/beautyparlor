<?php

namespace Database\Seeders;

use App\Models\Receptionist;
use Illuminate\Database\Seeder;

class ReceptionistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Receptionist::create(
            [
            // db coloum name || value
            'customer'=>'roza',
            ]
    );
    }
}
