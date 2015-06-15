<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vers12 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::dropIfExists('type');
		Schema::dropIfExists('answer');


		Schema::create('type', function($t){
			$t->increments('id');
			$t->string('name',30);
			$t->integer('budget');
		});

		Schema::create('answer', function($t){
			$t->integer('question_id');
			$t->increments('id');
			$t->string('answer',30)->nullable();
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
