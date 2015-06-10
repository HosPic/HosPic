<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vers4 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('discarded');

		Schema::create('discarded', function($t){
			$t->increments('id')
			$t->integer('article_id');
			$t->integer('price_id');
			$t->dateTime('date');
			$t->string('reason',80);
			$t->integer('quantity');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('discarded');
	}

}
