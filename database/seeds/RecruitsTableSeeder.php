<?php

use Illuminate\Database\Seeder;
use App\Models\Recruit;

class RecruitsTableSeeder extends Seeder
{
    public function run()
    {

        //$faker = app(Faker\Generator::class);

        $recruits = factory(Recruit::class)
                            ->times(10)
                            ->make();

        Recruit::insert($recruits->toArray());
    }

}

