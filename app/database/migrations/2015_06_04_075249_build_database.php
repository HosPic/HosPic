<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuildDatabase extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		/*Start user data*/
		Schema::create('user_info'),function($t){
			$t->increments('user_id');
			$t->integer('type_id');
			$t->string('name',45);
		}
	
		Schema::create('budget'),function($t){
			$t->integer('type_id')->primary();
			$t->string('type',20);
			$t->integer('budget');
		}

		Schema::create('user_department'),function($t){
			$t->integer('user_id')->primary();
			$t->integer('department_code')->primary();
		}

		Schema::create('department'),function($t){
			$t->integer('department_code')->primary();
			$t->string('department',30);
		}
		/*End user data*/

		/*Start service data*/
		Schema::create('service'),function($t){
			$t->integer('user_id');
			$t->increments('service_id');
			$t->integer('category_code');
			$t->dateTime('request_date');
			$t->string('prefered_days',14);
			$t->dateTime('delivery_date');
			$t->integer('status');
			$t->string('description',400);
			$t->string('location',15);
		}

		Schema::create('service_category'),function($t){
			$t->integer('category_code')->primary();
			$t->string('category',10);
		}

		/*End service data*/

		/*Start order data*/
		Schema::create('order'),function($t){
			$t->integer('user_id');
			$t->increments('order_id');
			$t->integer('department_code');
			$t->dateTime('order_date');
			$t->dateTime('delivery_date');
			$t->string('prefered_days',14);
			$t->integer('status');
			$t->string('location',15);
		}

		Schema::create('order_article'),function($t){
			$t->integer('order_id')->primary();
			$t->integer('article_code')->primary();
			$t->integer('price_code')->primary();
			$t->integer('quantity');
			$t->integer('total_delivered');
		}

		Schema::create('order_answer'),function($t){
			$t->integer('order_id')->primary();
			$t->integer('article_code')->primary();
			$t->integer('question_id')->primary();
			$t->string('answer',300);
		}
		/*End order data*/

		/*Start article data*/
		Schema::create('article'),function($t){
			$t->increments('article_code');
			$t->integer('category_code');
			$t->string('name',60);
			$t->string('unit',10);
			$t->integer('minimal_supply');
			$t->date('date_of_creation');
			$t->boolean('special');
			$t->boolean('hidden');
			$t->string('description',130);
		}

		Schema::create('article_category'),function($t){
			$t->integer('category_code')->primary();
			$t->string('category',45);
		}

		Schema::create('article_data'),function($t){
			$t->integer('article_code')->primary();
			$t->increments('price_code');
			$t->integer('supply');
			$t->decimal('price',6,2);
			$t->string('location',45);
		}

		Schema::create('discarded'),function($t){
			$t->integer('article_code')->primary();
			$t->integer('price_code')->primary();
			$t->dateTime('date');
			$t->string('reason',80);
			$t->integer('quantity');
		}

		Schema::create('article_question'),function($t){
			$t->integer('article_code');
			$t->increments('question_id');
			$t->string('question',60);
		}

		Schema::create('question_answer'),function($t){
			$t->integer('question_id');
			$t->increments('answer_id');
			$t->string('answer',30);
		}

		/*End article data*/
	

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		/*Schema::dropIfExists('users');*/
	}

}
