<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration 
{
	public function up()
	{
		Schema::create('questions', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title')->index();
            $table->text('content')->nullable();
            $table->integer('user_id')->unsigned()->index();
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('questions');
	}
}
