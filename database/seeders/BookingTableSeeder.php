<?php

namespace Database\Seeders;
use App\Models\Booking;
use Illuminate\Database\Seeder;

class BookingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
            //
            Booking::create(
                [
                // db coloum name || value
                'customer_name'=>'x',
                'customer_details'=>'muhammadpur',
                'booking_time'=>'2',
                
                
                
        
                ]
        );
        
    }
}
