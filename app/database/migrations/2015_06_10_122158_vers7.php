<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vers7 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{	
			Schema::dropIfExists('user');

			Schema::create('user', function($t){
			$t->increments('id');
			$t->integer('type_id');
			$t->string('first_name',50);
			$t->string('last_name,',50);
			$t->string('email',50);
			$t->string('password',70);
			$t->rememberToken();
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
