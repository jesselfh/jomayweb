<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Models\Recruit::class, function (Faker $faker) {

    $now = Carbon::now()->toDateTimeString();
    return [
        'position' => $faker->sentence,
        'recruit_count' => $faker->randomDigit,
        'requirement' => $faker->text(),
        'created_at' => $now,
        'updated_at' => $now,
    ];
});
