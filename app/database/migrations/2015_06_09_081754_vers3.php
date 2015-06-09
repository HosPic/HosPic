<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vers3 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('service_category');
		Schema::dropIfExists('service');
		Schema::dropIfExists('user_info');
		Schema::dropIfExists('budget');
		Schema::dropIfExists('user_department');
		Schema::dropIfExists('department');
		Schema::dropIfExists('article_category');
		Schema::dropIfExists('article');
		Schema::dropIfExists('discarded');
		Schema::dropIfExists('article_data');
		Schema::dropIfExists('article_question');
		Schema::dropIfExists('question_answer');
		Schema::dropIfExists('order');
		Schema::dropIfExists('order_article');
		Schema::dropIfExists('order_answer');
		Schema::dropIfExists('request');

		/*Start user data*/

		Schema::create('request', function($t)
		{
			$t->increments('id');
			$t->integer('user_id');$t->integer('department_manager');
			$t->dateTime('date');
			$t->string('reason',500);
			$t->integer('status');
		});


		Schema::create('user', function($t){
			$t->increments('id');
			$t->integer('type_id');
			$t->string('name',45);
			$t->string('password',70);
		});
	
		Schema::create('type', function($t){
			$t->increments('id');
			$t->string('name',20);
			$t->integer('budget');
		});

		Schema::create('user_department', function($t){
			$t->integer('user_id');
			$t->integer('department_id');
			$t->primary(array('user_id','department_id'));
		});

		Schema::create('department', function($t){
			$t->integer('id')->primary();
			$t->string('name',30);
			$t->integer('manager');
		});
		/*End user data*/

		/*Start service data*/
		Schema::create('service', function($t){
			$t->integer('user_id');
			$t->increments('id');
			$t->integer('category_id');
			$t->dateTime('request_date');
			$t->string('prefered_days',14);
			$t->dateTime('delivery_date');
			$t->integer('status');
			$t->string('description',400);
			$t->string('location',15);
		});

		/*End service data*/

		/*Start order data*/
		Schema::create('order', function($t){
			$t->integer('user_id');
			$t->increments('id');
			$t->integer('department_id');
			$t->dateTime('order_date');
			$t->dateTime('delivery_date');
			$t->string('prefered_days',14);
			$t->integer('status');
			$t->string('location',15);
		});

		Schema::create('order_article', function($t){
			$t->integer('order_id');
			$t->integer('article_id');
			$t->integer('price_id');
			$t->integer('quantity');
			$t->integer('total_delivered');
			$t->primary(array('order_id','article_id','price_id'));
		});

		Schema::create('order_answer', function($t){
			$t->integer('order_id');
			$t->integer('article_id');
			$t->integer('question_id');
			$t->string('answer',300);
			$t->primary(array('order_id','article_id','question_id'));
		});
		/*End order data*/

		/*Start article data*/
		Schema::create('article', function($t){
			$t->increments('id');
			$t->integer('category_id');
			$t->string('name',60);
			$t->string('unit',10);
			$t->integer('minimal_supply');
			$t->dateTime('date_of_creation');
			$t->boolean('special');
			$t->boolean('hidden');
			$t->string('description',130);
		});

		Schema::create('category', function($t){
			$t->integer('id')->primary();
			$t->string('name',45);
			$t->boolean('budget_bound');
			$t->integer('type');	
		});

		Schema::create('price', function($t){
			$t->integer('article_id');
			$t->increments('id');
			$t->integer('supply');
			$t->decimal('price',6,2);
			$t->string('location',45);
		});

		Schema::create('discarded', function($t){
			$t->integer('article_id');
			$t->integer('price_id');
			$t->dateTime('date');
			$t->string('reason',80);
			$t->integer('quantity');
			$t->primary(array('article_id','price_id'));
		});

		Schema::create('question', function($t){
			$t->integer('article_id');
			$t->increments('id');
			$t->string('question',60);
		});

		Schema::create('answer', function($t){
			$t->integer('question_id');
			$t->increments('id');
			$t->string('answer',30);
		});

		/*End article data*/
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
