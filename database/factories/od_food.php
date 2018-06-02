<?php
/**
 * Created by PhpStorm.
 * User: ocpanda
 * Date: 2018/6/2
 * Time: 下午1:56
 */

use Faker\Generator as Faker;
use App\od_food;

$factory->define(od_food::class, function (Faker $faker) {
    $menuNumber = DB::table('od_menus')->count();
    return [
        'menu_id' => $faker->numberBetween(1, $menuNumber),
        'cal' => $faker->numberBetween(1, 1000),
        'g' => $faker->numberBetween(1,500)
    ];
});
