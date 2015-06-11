	<?php

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();

		// $this->call('DepartmentSeeder');
		$this->command->info('Dapartment table filled');
		$this->call('TypeSeeder');
		$this->command->info('Type table filled');
		$this->call('RequestSeeder');
		$this->command->info('Request table filled');
		$this->call('UserSeeder');
		$this->command->info('User table filled');

		$this->call('CategorySeeder');
		$this->command->info('Categorie table filled');				
		$this->call('ArticleSeeder');
		$this->command->info('Article table filled');				
		$this->call('OrderSeeder');
		$this->command->info('Order tables filled');				

		$this->command->info('All seeds are executed');
	}
}