<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration 
{
	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('model_number');
            $table->text('introduce');
            $table->string('doc_url');
            $table->string('cover_image');
            $table->integer('category_id')->unsigned();
            $table->integer('brand_id')->unsigned();
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('products');
	}
}
