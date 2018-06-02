<?php

use Illuminate\Database\Seeder;

class od_usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\od_users::class, 30)->create();
    }
}
