<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call([
            od_detailsSeeder::class,
            od_foodSeeder::class,
            od_menusSeeder::class,
            od_receiptSeeder::class,
            od_storesSeeder::class,
            od_usersSeeder::class
        ]);
    }
}
