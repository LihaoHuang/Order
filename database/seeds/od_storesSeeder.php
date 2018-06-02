<?php

use Illuminate\Database\Seeder;

class od_storesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\od_stores::class, 30)->create();
    }
}
