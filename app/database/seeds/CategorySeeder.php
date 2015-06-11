<?php
class CategorySeeder extends Seeder{

	public function run() {
		DB::table('category')->delete();

		/*0=article, 1=both 2=service*/
		$categories = array(
			array(
				'name' => 'ICT',
				'budget_bound' => true,
				'type' => 1,
			),
			array(
				'name' => 'Technisch',
				'budget_bound' => true,
				'type' => 2,
			),
			array(
				'name' => 'Brandwond',
				'budget_bound' => true,
				'type' => 0,
			),
			array(
				'name' => 'Desinfectie',
				'budget_bound' => true,
				'type' => 0,
			),
			array(
				'name' => 'Materiaal',
				'budget_bound' => true,
				'type' => 0,
			),
			array(
				'name' => 'Medicijn',
				'budget_bound' => true,
				'type' => 0,
			),
			array(
				'name' => 'Pleisters',
				'budget_bound' => true,
				'type' => 0,
			),
			array(
				'name' => 'Kantoor',
				'budget_bound' => true,
				'type' => 0,
			),
			array(
				'name' => 'Verband',
				'budget_bound' => true,
				'type' => 0,
			)
			
		);

		DB::table('category')->insert($categories);
	}

}