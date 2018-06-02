<?php
/**
 * Created by PhpStorm.
 * User: ocpanda
 * Date: 2018/6/2
 * Time: 下午1:56
 */

use Faker\Generator as Faker;
use App\od_receipt;

$factory->define(od_receipt::class, function (Faker $faker) {
    $storeNumber = DB::table('od_stores')->count();
    $usersNumber = DB::table('od_users')->count();
    return [
        'store_id' => $faker->numberBetween(1,$storeNumber),
        'user_id' => $faker->numberBetween(1,$usersNumber),
        'create_at' => $faker->dateTime(),
        'uni_number' => $faker->randomNumber(8)
    ];
});
