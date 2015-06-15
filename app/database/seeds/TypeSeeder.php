<?php
class TypeSeeder extends Seeder{

	public function run() {
		DB::table('type')->truncate();
		
		$types = array(
			array(
				'name' => 'Medewerker',
				'budget' => 500
			),
			array(
				'name' => 'Hoofd',
				'budget' => 5000
			),
			array(
				'name' => 'Managers',
				'budget' => 50000
			),
			array(
				'name' => 'Directie Secretaresse',
				'budget' => 150000
			),
			array(
				'name' => 'Directeur',
				'budget' => 1500000
			),
			array(
				'name' => 'CVB',
				'budget' => NULL
			)
		);

		DB::table('type')->insert($types);
	}

}