<?php
/**
 * Created by PhpStorm.
 * User: ocpanda
 * Date: 2018/6/2
 * Time: 下午1:56
 */

use Faker\Generator as Faker;
use App\od_stores;

$factory->define(od_stores::class, function (Faker $faker) {
    $dataNumber = DB::table('od_users')->count();
    $createDate = $faker->dateTime();
    $modifyDate = $faker->dateTime();
    if(\Carbon\Carbon::parse($createDate)->gt($modifyDate)){
        $tmp = $createDate;
        $createDate = $modifyDate;
        $modifyDate = $tmp;
    }
    return [
        'name' => $faker->lastName,
        'address' => $faker->address,
        'phone' => '0'.$faker->randomNumber(2).'-'.$faker->randomNumber(8),
        'user_id' => $faker->numberBetween(1, $dataNumber),
        'create_at' => $createDate,
        'modify_at' => $modifyDate
    ];
});
