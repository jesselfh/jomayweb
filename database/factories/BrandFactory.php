<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Brand::class, function (Faker $faker) {

    //随机取一个月以内的时间
    $updated_at = $faker->dateTimeThisMonth();
    //创建时间比更改时间早
    $created_at = $faker->dateTimeThisMonth($updated_at);

    return [
        'name' => $faker->name,
        'place' => $faker->address,
        'introduce' => $faker->text,
        'nationality' => $faker->country,
        'major_products' => $faker->sentence,
        'major_models' => $faker->sentence,
        'created_at' => $created_at,
        'updated_at' => $updated_at,
    ];

});
