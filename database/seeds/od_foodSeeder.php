<?php

use Illuminate\Database\Seeder;

class od_foodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\od_food::class, 30)->create();
    }
}
