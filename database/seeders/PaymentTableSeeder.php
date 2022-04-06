<?php

namespace Database\Seeders;
use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Payment::create(
            [
            // db coloum name || value
            'customer_name'=>'tithi',
            'customer_detail'=>'gazipur',
            'payment_detail'=>'paid',
            'payment_ammount'=>'30.0',
        
            ]
    );
    
    }
}
