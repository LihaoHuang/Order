<?php

use Illuminate\Database\Seeder;

class od_menusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\od_menus::class, 30)->create();
    }
}
