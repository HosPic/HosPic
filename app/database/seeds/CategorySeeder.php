<?php
class CategorySeeder extends Seeder{

	public function run() {
		DB::table('category')->delete();

		$categories = array(
			
		);

		DB::table('category')->insert($categories);
	}

}