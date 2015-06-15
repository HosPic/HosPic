<?php
class OrderSeeder extends Seeder{

	public function run() {
		DB::table('order')->truncate();
		DB::table('order_article')->truncate();
		DB::table('order_answer')->truncate();

		$orders = array(
			array(
				'user_id' => 1,
				'department_id' => 4,
				'order_date' => '0000-00-00 00:00:00',
				'delivery_date' => '0000-00-00 00:00:00',
				'prefered_days' => '1,2,3,4,5,6,7',
				
			),
			array(
				'user_id' => 2,
				'department_id' => 7,
				'order_date' => '0000-00-00 00:00:00',
				'delivery_date' => '0000-00-00 00:00:00',
				'prefered_days' => '1,2,3,4,5,6,7',
				
			),
			array(
				'user_id' => 2,
				'department_id' => 7,
				'order_date' => '0000-00-00 00:00:00',
				'delivery_date' => '0000-00-00 00:00:00',
				'prefered_days' => '1,2,3,4,5,6,7',
				
			)
		);
		$order_articles = array(
			array(
				'order_id' => 1,
				'article_id' => 2,
				'price_id' => 2,
				'quantity' => 5,
				'total_delivered' => 0
				),
			array(
				'order_id' => 2,
				'article_id' => 2,
				'price_id' => 2,
				'quantity' => 5,
				'total_delivered' => 0
				),
			array(
				'order_id' => 3,
				'article_id' => 10,
				'price_id' => 10,
				'quantity' => 5,
				'total_delivered' => 0
				),
			array(
				'order_id' => 3,
				'article_id' => 11,
				'price_id' => 11,
				'quantity' => 5,
				'total_delivered' => 0
				),
			array(
				'order_id' => 3,
				'article_id' => 12,
				'price_id' => 12,
				'quantity' => 5,
				'total_delivered' => 0
				)
		);
		$order_answers = array(
		);

		DB::table('order')->insert($orders);
		DB::table('order_article')->insert($order_articles);
		DB::table('order_answer')->insert($order_answers);
	}

}