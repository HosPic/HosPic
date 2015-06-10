	<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserSeeder');

		$this->command->info('frank houd van koekjes...');
		$this->command->info('mark eet soep met een vork');
		$this->command->info('DB seeden is gelukt');

		// $this->call('UserTableSeeder');
	}

}
