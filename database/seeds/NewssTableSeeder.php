<?php

use Illuminate\Database\Seeder;
use App\Models\News;

class NewssTableSeeder extends Seeder
{
    public function run()
    {
        $newss = factory(News::class)->times(50)->make()->each(function ($news, $index) {
            if ($index == 0) {
                // $news->field = 'value';
            }
        });

        News::insert($newss->toArray());
    }

}

