<?php
class RequestSeeder extends Seeder{

	public function run() {
		DB::table('request')->delete();

		$requests = array(
		);

		DB::table('request')->insert($requests);
	}

}