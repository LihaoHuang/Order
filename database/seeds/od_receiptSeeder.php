<?php

use Illuminate\Database\Seeder;

class od_receiptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\od_receipt::class, 30)->create();
    }
}
