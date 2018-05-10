<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Models\Product::class, function (Faker $faker) {

    $now = Carbon::now()->toDateTimeString();

    return [

        'name' => $faker->name,
        'model_number' => str_random(8),
        'introduce' => $faker->text(),
        //'doc_url' => $faker->url,
        //'cover_image' => $faker->url,
        'created_at' => $now,
        'updated_at' => $now,
    ];
});
