<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDb11 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('article_category' ,function($t){
			$t->boolean('budget_bound');
		});

		Schema::table('department', function($t){
			$t->integer('department_manager');
		});

		Schema::table('user_info', function($t)
		{
			$t->string('password',70);
		});

		Schema::create('request', function($t)
		{
			$t->increments('request_id');
			$t->integer('user_id');
			$t->dateTime('date');
			$t->string('reason',500);
			$t->integer('status');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		
	}

}
