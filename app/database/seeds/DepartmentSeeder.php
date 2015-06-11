<?php
class DepartmentSeeder extends Seeder{

	public function run() {
		DB::table('department')->delete();
		$departments = array(
			array(
				'name' => 'Magazijn',
				'manager' => 7
			),
		);

		DB::table('deparment')->insert($deparments);
	}

}