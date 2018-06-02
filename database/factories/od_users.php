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
    $createDate = $faker->dateTime();
    $modifyDate = $faker->dateTime();
    if(\Carbon\Carbon::parse($createDate)->gt($modifyDate)){
        $tmp = $createDate;
        $createDate = $modifyDate;
        $modifyDate = $tmp;
    }
    return [
        'name' => $faker->lastName,
        'username' => $faker->word,
        'password' => Hash::make('12345678'),
        'phone' => '0'.$faker->randomNumber(2).'-'.$faker->randomNumber(8),
        'authority' => $faker->randomElement($array = array (1, 9)),
        'email' => $faker->email,
        'create_at' => $createDate,
        'modify_at' => $modifyDate
    ];
});
