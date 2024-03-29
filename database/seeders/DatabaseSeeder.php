<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this ->call(ReceptionistTableSeeder::class);
        $this ->call(BeauticianTableSeeder::class);
        $this ->call(ProductTableSeeder::class);
        // \App\Models\User::factory(10)->create();
        $this->call(PaymentTableSeeder::class);
         $this->call(UserTableSeeder::class);
    }
}