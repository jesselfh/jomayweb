<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Brand;

class BrandsTableSeeder extends Seeder
{
    public function run()
    {
        //分类id数组
        $category_ids = Category::all()->pluck('id')->toArray(); //pluck('id')，获取集合中指定键（id）所对应的值

        $faker = app(Faker\Generator::class);

        // logo假数据
        $logoes = [
            'http://images.clipartpanda.com/superman-clipart-di7yrjxi9.jpeg',
            'http://orig03.deviantart.net/302b/f/2012/283/1/0/flower_logo_by_karolkaah-d5hfd94.png',
            'https://www.seeklogo.net/wp-content/uploads/2013/06/unip-vector-logo.png',
            'https://www.seeklogo.net/wp-content/uploads/2012/11/geox-logo-vector.png',
            'https://logoeps.com/wp-content/uploads/2012/10/scania-logo-vector.png',
            'https://logosave.com/images/large/8/Super-99-logo.gif',
            'https://deltafonts.com/wp-content/uploads/Londis-Logo.png',
            'https://www.seeklogo.net/wp-content/uploads/2013/08/danone-eps-vector-logo-400x400.png',
        ];

        $brands = factory(Brand::class)
                        ->times(50)
                        ->make()
                        ->each(function ($brand, $index) use($logoes,$category_ids, $faker) {
                            $brand->logo = $faker->randomElement($logoes);
                            $brand->category_id = $faker->randomElement($category_ids);
                        });

        Brand::insert($brands->toArray());
    }

}

