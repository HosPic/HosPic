<?php
class OrderSeeder extends Seeder{

	public function run() {
		DB::table('order')->delete();
		DB::table('order_article')->delete();
		DB::table('order_answer')->delete();

		$orders = array(
			array(
				'user_id' => 1,
				'department_id' => 1,
				'order_date' => '0000-00-00 00:00:00',
				'delivery_date' => '0000-00-00 00:00:00',
				'prefered_days' => '1,2,3,4,5,6,7',
				
			),
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