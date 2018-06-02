<?php
/**
 * Created by PhpStorm.
 * User: ocpanda
 * Date: 2018/6/2
 * Time: 下午1:56
 */

use Faker\Generator as Faker;
use App\od_details;

$factory->define(od_details::class, function (Faker $faker) {
    $receiptNumber = DB::table('od_receipt')->count();
    $menuNumber = DB::table('od_menus')->count();
    return [
        'receipt_id' => $faker->numberBetween(1,$receiptNumber),
        'menu_id' => $faker->numberBetween(1,$menuNumber),
        'num' => $faker->randomDigit,
        'nick_name' => $faker->lastName,
        'costed' => $faker->boolean
    ];
});
