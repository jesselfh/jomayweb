<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitsTable extends Migration 
{
	public function up()
	{
		Schema::create('recruits', function(Blueprint $table) {
            $table->increments('id');
            $table->string('position');
            $table->integer('recruit_count')->unsigned()->default(0);
            $table->text('requirement');
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('recruits');
	}
}
