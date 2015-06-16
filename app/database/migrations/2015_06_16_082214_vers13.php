<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vers13 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{	
		Schema::dropIfExists('order');

		Schema::create('order', function($t){
			$t->integer('user_id');
			$t->increments('id');
			$t->integer('department_id');
			$t->dateTime('order_date');
			$t->dateTime('delivery_date');
			$t->string('prefered_days',14);
			$t->integer('status');
			$t->string('location_building',20);
			$t->string('location_room',20);
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
