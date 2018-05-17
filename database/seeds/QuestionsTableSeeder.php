<?php

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\User;

class QuestionsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = app(Faker\Generator::class);

        //user id 数组
        $user_ids = User::all()->pluck('id')->toArray();

        $questions = factory(Question::class)
                            ->times(50)
                            ->make()
                            ->each(function ($question, $index) use($user_ids, $faker) {
                                $question->user_id = $faker->randomElement($user_ids);
                            });

        Question::insert($questions->toArray());
    }

}

