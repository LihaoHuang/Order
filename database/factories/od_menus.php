<?php
/**
 * Created by PhpStorm.
 * User: ocpanda
 * Date: 2018/6/2
 * Time: 下午1:56
 */

use Faker\Generator as Faker;
use App\od_menus;

$factory->define(od_menus::class, function (Faker $faker) {
    $dataNumber = DB::table('od_stores')->count();
    $menuNumber = DB::table('od_menus')->where('store_id')->count();
    $createDate = \Carbon\Carbon::createFromTimeStamp($faker->dateTimeBetween('-30 days', '+30 days')->getTimestamp());
    $modifyDate = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $createDate)->addDay();
    return [
        'store_id' => $faker->numberBetween(1, $dataNumber),
        'sort' => $menuNumber+1,
        'classify' => $faker->randomElement($array = array ('麵類','飲料','湯','餃子','飯')),
        'food_name' => $faker->word,
        'cost' => $faker->numberBetween(10, 500),
        'create_at' => $createDate,
        'update_at' => $modifyDate
    ];
});
