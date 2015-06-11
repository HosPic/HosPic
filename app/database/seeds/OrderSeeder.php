<?php
class OrderSeeder extends Seeder{

	public function run() {
		DB::table('order')->delete();
		DB::table('order_article')->delete();
		DB::table('order_answer')->delete();

		$orders = array(
		);
		$order_articles = array(
		);
		$order_answers = array(
		);

		DB::table('order')->insert($orders);
		DB::table('order_article')->insert($order_articles);
		DB::table('order_answer')->insert($order_answers);
	}

}