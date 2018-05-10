<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
	public function up()
	{
		Schema::create('brands', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name')->index();
            $table->string('logo');
            $table->string('place');
            $table->text('introduce');
            $table->integer('category_id')->unsigned();
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('brands');
	}
}
