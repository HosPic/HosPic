<?php
class ArticleSeeder extends Seeder{

	public function run() {
		DB::table('article')->truncate();
		DB::table('discarded')->truncate();
		DB::table('price')->truncate();
		DB::table('question')->truncate();
		DB::table('answer')->truncate();

		$article = array(
		);

		$discarded = array(
		);

		$price = array(
		);

		$question = array(
		);
		
		$answer = array(
		);

		DB::table('article')->insert($article);
		DB::table('discarded')->insert($discarded);
		DB::table('price')->insert($price);
		DB::table('question')->insert($question);
		DB::table('answer')->insert($answer);
	}
}