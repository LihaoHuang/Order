<?php
/**
 * Created by PhpStorm.
 * User: ocpanda
 * Date: 2018/6/2
 * Time: 下午1:56
 */

use Faker\Generator as Faker;
use App\od_users;

$factory->define(od_users::class, function (Faker $faker) {
//    $createDate = $faker->dateTime();
//    $modifyDate = $faker->dateTime();
//    if(\Carbon\Carbon::parse($createDate)->format('Y-m-d')->gt($modifyDate)){
//        $tmp = $createDate;
//        $createDate = $modifyDate;
//        $modifyDate = $tmp;
//    }

    $createDate = \Carbon\Carbon::createFromTimeStamp($faker->dateTimeBetween('-30 days', '+30 days')->getTimestamp());
    $modifyDate = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $createDate)->addDay();
    return [
        'name' => $faker->lastName,
        'username' => $faker->word,
        'password' => Hash::make('12345678'),
        'phone' => '0'.$faker->randomNumber(2).'-'.$faker->randomNumber(7),
        'authority' => $faker->randomElement($array = array (1, 9)),
        'email' => $faker->email,
        'create_at' => $createDate,
        'update_at' => $modifyDate
    ];
});
