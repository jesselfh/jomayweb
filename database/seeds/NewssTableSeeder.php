<?php

use Illuminate\Database\Seeder;
use App\Models\News;
use App\Models\User;
use App\Models\NewsCategory;

class NewssTableSeeder extends Seeder
{
    public function run()
    {

        //用户id数组
        $user_ids = User::all()->pluck('id')->toArray(); //pluck()为给定键获取所有集合值
        //新闻分类id数组
        $news_category_ids = NewsCategory::all()->pluck('id')->toArray();

        //Faker实例
        $faker = app(Faker\Generator::class);

        $newss = factory(News::class)
                        ->times(100)
                        ->make()
                        ->each(function ($news, $index) use($user_ids, $news_category_ids, $faker){

                            //从用户id数组中随机取出一个并赋值
                            $news->user_id = $faker->randomElement($user_ids);
                            //从新闻分类id数组中随机取出一个并赋值
                            $news->news_category_id = $faker->randomElement($news_category_ids);

                        });

        //将数据集合转换为数组，并插入到数据库中
        News::insert($newss->toArray());
    }

}

