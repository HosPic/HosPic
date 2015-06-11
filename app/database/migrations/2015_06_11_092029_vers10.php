<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vers10 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{	
		DB::table('category')->truncate();
		Schema::dropIfExists('category');

		Schema::create('category', function($t){
			$t->increments('id');
			$t->string('name',45);
			$t->boolean('budget_bound');
			$t->integer('type');

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
