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
//    $createDate = $faker->dateTime();
//    $modifyDate = $faker->dateTime();
//    if(\Carbon\Carbon::parse($createDate)->gt($modifyDate)){
//        $tmp = $createDate;
//        $createDate = $modifyDate;
//        $modifyDate = $tmp;
//    }
    $createDate = \Carbon\Carbon::createFromTimeStamp($faker->dateTimeBetween('-30 days', '+30 days')->getTimestamp());
    $modifyDate = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $createDate)->addDay();
    return [
        'name' => $faker->lastName,
        'address' => $faker->address,
        'phone' => '0'.$faker->randomNumber(2).'-'.$faker->randomNumber(7),
        'user_id' => $faker->numberBetween(1, $dataNumber),
        'classify' => $faker->randomElement(array('中餐','飲料','早午餐','西餐','冰品','隱藏美食','甜點','小吃')),
        'create_at' => $createDate,
        'update_at' => $modifyDate
    ];
});
