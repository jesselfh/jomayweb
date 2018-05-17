<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        //Faker实例
        $faker = app(Faker\Generator::class);

        //category id数组
        $category_ids = Category::all()->pluck('id')->toArray();
        //brand id数组
        $brand_ids = Brand::all()->pluck('id')->toArray();

        $doc_urls = [
            'http://www.deppre.com/upload/xunjiadan.xls',
            'http://www.celiss.com/products/files201511616114789266861.pdf',
            'http://www.celiss.com/products/files201692015945699745689.pdf',
        ];

        $images =[
            'http://www.deppre.com/upload/images/20170810/2017810410542875.gif.thumb.gif',
            'http://www.deppre.com/upload/images/20160906/2016962141122392.jpeg.thumb.jpeg',
            'http://www.deppre.com/upload/images/20161125/201611255165756720.gif.thumb.gif',
            'http://www.deppre.com/upload/images/20161125/201611255165919183.gif.thumb.gif',
            'http://www.deppre.com/upload/images/20170810/20178104113013671.gif.thumb.gif',
            'http://www.deppre.com/upload/images/20161202/201612259254143.gif.thumb.gif',
            'http://www.deppre.com/upload/images/20161125/20161125516579483.gif.thumb.gif',
        ];


        $products = factory(Product::class)
                            ->times(500)
                            ->make()
                            ->each(function ($product, $index) use($category_ids, $brand_ids, $doc_urls, $images, $faker) {

                                $product->doc_url = $faker->randomElement($doc_urls);
                                $product->cover_image = $faker->randomElement($images);
                                $product->category_id = $faker->randomElement($category_ids);
                                $product->brand_id = $faker->randomElement($brand_ids);

                            });

        Product::insert($products->toArray());
    }

}

