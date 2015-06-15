<?php
class ArticleSeeder extends Seeder{

	public function run() {
		DB::table('article')->truncate();
		DB::table('discarded')->truncate();
		DB::table('price')->truncate();
		DB::table('question')->truncate();
		DB::table('answer')->truncate();

		$article = array(
			array(
				'category_id' => 3,
				'name' => 'blusdeken',
				'unit' => 'stuks',
				'minimal_supply' => 15,
				'date_of_creation' => '0000-00-00 00:00:00',
				'special' => false,
				'hidden' => false,
				'description' => 'beschrijving',
				'picture' => '/img/products/100x100.png'
			),
			array(
				'category_id' => 3,
				'name' => 'oogspoeling',
				'unit' => 'stuks',
				'minimal_supply' => 15,
				'date_of_creation' => '0000-00-00 00:00:00',
				'special' => false,
				'hidden' => false,
				'description' => 'beschrijving',
				'picture' => '/img/products/100x100.png'
			),
			array(
				'category_id' => 4,
				'name' => 'betadine',
				'unit' => 'dozijn',
				'minimal_supply' => 15,
				'date_of_creation' => '0000-00-00 00:00:00',
				'special' => false,
				'hidden' => false,
				'description' => 'beschrijving',
				'picture' => '/img/products/100x100.png'
			),
			array(
				'category_id' => 5,
				'name' => 'injectienaald',
				'unit' => 'doos(30)',
				'minimal_supply' => 15,
				'date_of_creation' => '0000-00-00 00:00:00',
				'special' => false,
				'hidden' => false,
				'description' => 'beschrijving',
				'picture' => '/img/products/100x100.png'
			),
			array(
				'category_id' => 5,
				'name' => 'tekentang',
				'unit' => 'stuks',
				'minimal_supply' => 15,
				'date_of_creation' => '0000-00-00 00:00:00',
				'special' => false,
				'hidden' => false,
				'description' => 'beschrijving',
				'picture' => '/img/products/100x100.png'
			),
			array(
				'category_id' => 5,
				'name' => 'schaar',
				'unit' => 'stuks',
				'minimal_supply' => 15,
				'date_of_creation' => '0000-00-00 00:00:00',
				'special' => false,
				'hidden' => false,
				'description' => 'beschrijving',
				'picture' => '/img/products/100x100.png'
			),
			array(
				'category_id' => 6,
				'name' => 'oogdruppel',
				'unit' => 'dozijn',
				'minimal_supply' => 15,
				'date_of_creation' => '0000-00-00 00:00:00',
				'special' => false,
				'hidden' => false,
				'description' => 'beschrijving',
				'picture' => '/img/products/100x100.png'
			),
			array(
				'category_id' => 7,
				'name' => 'paracetamol',
				'unit' => 'doos(50)',
				'minimal_supply' => 15,
				'date_of_creation' => '0000-00-00 00:00:00',
				'special' => false,
				'hidden' => false,
				'description' => 'beschrijving',
				'picture' => '/img/products/100x100.png'
			),
			array(
				'category_id' => 8,
				'name' => 'pennen',
				'unit' => 'stuks',
				'minimal_supply' => 15,
				'date_of_creation' => '0000-00-00 00:00:00',
				'special' => false,
				'hidden' => false,
				'description' => 'beschrijving',
				'picture' => '/img/products/100x100.png'
			),
			array(
				'category_id' => 9,
				'name' => 'maandverband',
				'unit' => 'dozijn',
				'minimal_supply' => 15,
				'date_of_creation' => '0000-00-00 00:00:00',
				'special' => false,
				'hidden' => false,
				'description' => 'beschrijving',
				'picture' => '/img/products/100x100.png'
			),
			array(
				'category_id' => 9,
				'name' => 'sporttape',
				'unit' => 'dozijn',
				'minimal_supply' => 15,
				'date_of_creation' => '0000-00-00 00:00:00',
				'special' => false,
				'hidden' => false,
				'description' => 'beschrijving',
				'picture' => '/img/products/100x100.png'
			),
			array(
				'category_id' => 9,
				'name' => 'tampons',
				'unit' => 'doos(35)',
				'minimal_supply' => 15,
				'date_of_creation' => '0000-00-00 00:00:00',
				'special' => false,
				'hidden' => false,
				'description' => 'beschrijving',
				'picture' => '/img/products/100x100.png'
			),
			array(
				'category_id' => 1,
				'name' => 'USB',
				'unit' => 'stuks',
				'minimal_supply' => 15,
				'date_of_creation' => '0000-00-00 00:00:00',
				'special' => false,
				'hidden' => false,
				'description' => '8GB',
				'picture' => '/img/products/100x100.png'
			),

		);

		$discarded = array(
		);

		$price = array(
			array(
				'article_id' => 1,
				'supply' => 250,
				'price' => 4.20,
				'location' => 'D12'
			),
			array(
				'article_id' => 2,
				'supply' => 250,
				'price' => 4.20,
				'location' => 'D12'
			),
			array(
				'article_id' => 3,
				'supply' => 250,
				'price' => 620,
				'location' => 'D12'
			),
			array(
				'article_id' => 4,
				'supply' => 250,
				'price' => 4.20,
				'location' => 'D12'
			),
			array(
				'article_id' => 5,
				'supply' => 250,
				'price' => 4.20,
				'location' => 'D12'
			),
			array(
				'article_id' => 6,
				'supply' => 250,
				'price' => 4.20,
				'location' => 'D12'
			),
			array(
				'article_id' => 7,
				'supply' => 250,
				'price' => 4.20,
				'location' => 'D12'
			),
			array(
				'article_id' => 8,
				'supply' => 250,
				'price' => 4.20,
				'location' => 'D12'
			),
			array(
				'article_id' => 9,
				'supply' => 250,
				'price' => 4.20,
				'location' => 'D12'
			),
			array(
				'article_id' => 10,
				'supply' => 250,
				'price' => 4.20,
				'location' => 'D12'
			),
			array(
				'article_id' => 11,
				'supply' => 250,
				'price' => 4.20,
				'location' => 'D12'
			),
			array(
				'article_id' => 12,
				'supply' => 250,
				'price' => 4.20,
				'location' => 'D12'
			),
			array(
				'article_id' => 13,
				'supply' => 250,
				'price' => 4.20,
				'location' => 'D12'
			)
		);

		$question = array(
			array(
				'article_id' => 12,
				'question' => 'Waarvoor wilt u het gebruiken?'
			),

			array(
				'article_id' => 12,
				'question' => 'Welke maat heeft u?'
			),

			array(
				'article_id' => 7,
				'question' => 'Hoeveel ogen heeft u?'
			)
		);
		
		$answer = array(
			array(
				'question_id' => 1,
				'answer' => NULL
			),
			array(
				'question_id' => 2,
				'answer' => 'M'
			),
			array(
				'question_id' => 2,
				'answer' => 'X'
			),
			array(
				'question_id' => 2,
				'answer' => 'XL'
			),
			array(
				'question_id' => 3,
				'answer' => '1 oog'
			),
			array(
				'question_id' => 3,
				'answer' => '2 ogen'
			)
			
		);

		DB::table('article')->insert($article);
		DB::table('discarded')->insert($discarded);
		DB::table('price')->insert($price);
		DB::table('question')->insert($question);
		DB::table('answer')->insert($answer);
	}
}