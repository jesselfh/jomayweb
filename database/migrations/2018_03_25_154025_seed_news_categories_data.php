<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedNewsCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $newsCategories = [
            [
                'name' => '行业资讯',
                'description' => '行业实时资讯，最新流行产品，最新价格行情。',
            ],
            [
                'name' => '企业新闻',
                'description' => '企业大事记，传播信息，传播价值。',
            ]
        ];

        DB::table('news_categories')->insert($newsCategories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('news_categories')->truncate();
    }
}
