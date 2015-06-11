<?php
class DepartmentSeeder extends Seeder{

	public function run() {

		DB::table('department')->truncate();

		$departments = array(
			array(
				'name' => 'Magazijn',
				'manager' => 7
			),

			array(
				'name' => 'Facilitaire Diensten', /*Technische Dienst*/
				'manager' => 8
			),

			array(
				'name' => 'Directie',
				'manager' => 10
			),

			array(
				'name' => 'ICT',
				'manager' => 9
			),

			array(
				'name' => 'Administratie',
				'manager' => 6
			),

			array(
				'name' => 'Keuken',
				'manager' => 11
			),

			array(
				'name' => 'Verpleging',
				'manager' => 11
			),

			array(
				'name' => 'Medisch-overig',
				'manager' => 11
			),

			array(
				'name' => 'Artsen',
				'manager' => 11
			),

			array(
				'name' => 'Chirurgie',
				'manager' => 11
			),

			array(
				'name' => 'Kantoor-overig',
				'manager' => 11
			),

			array(
				'name' => 'PSZ',
				'manager' => 11
			)




		);

		DB::table('department')->insert($departments);
	}

}