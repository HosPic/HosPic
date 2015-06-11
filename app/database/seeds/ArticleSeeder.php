<?php
class ArticleSeeder extends Seeder{

	public function run() {
		DB::table('article')->delete();
		DB::table('discarded')->delete();
		DB::table('price')->delete();
		DB::table('question')->delete();
		DB::table('answer')->delete();

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