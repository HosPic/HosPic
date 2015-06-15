<?php
class DepartmentSeeder extends Seeder{

	public function run() {

		DB::table('department')->truncate();

		$departments = array(
			array(
				'name' => 'magazijn',
				'manager' => 7
			),

			array(
				'name' => 'facilitaire diensten', /*Technische Dienst*/
				'manager' => 8
			),

			array(
				'name' => 'directie',
				'manager' => 10
			),

			array(
				'name' => 'ict',
				'manager' => 9
			),

			array(
				'name' => 'administratie',
				'manager' => 6
			),

			array(
				'name' => 'jeuken',
				'manager' => 11
			),

			array(
				'name' => 'verpleging',
				'manager' => 11
			),

			array(
				'name' => 'medisch-overig',
				'manager' => 11
			),

			array(
				'name' => 'artsen',
				'manager' => 11
			),

			array(
				'name' => 'chirurgie',
				'manager' => 11
			),

			array(
				'name' => 'kantoor-overig',
				'manager' => 11
			),

			array(
				'name' => 'psz',
				'manager' => 11
			)




		);

		DB::table('department')->insert($departments);
	}

}