<?php

class UserSeeder extends Seeder{
	public function run() {
		DB::table('user')->delete();
		DB::table('user_department')->delete();
		DB::table('department')->delete();
		DB::table('type')->delete();


		$user = array(

			array(
				'type_id' => 1,
				'first_name' => 'Leon',
				'last_name' => 'Admiraal',
				'password' => Hash::make('123'),
				'email' => 'ladmiraal@nmc.nl'
			),

			array(
				'type_id' => 1,
				'first_name' => 'Malin',
				'last_name' => 'Bakker',
				'password' => Hash::make('123'),
				'email' => 'mbakker@nmc.nl'
			),

			array(
				'type_id' => 1,
				'first_name' => 'Mark',
				'last_name' => 'Vels',
				'password' => Hash::make('123'),
				'email' => 'mvels@nmc.nl'
			),

			array(
				'type_id' => 1,
				'first_name' => 'Frank',
				'last_name' => 'Blom',
				'password' => Hash::make('123'),
				'email' => 'fblom@nmc.nl'
			),

			array(
				'type_id' => 2,
				'first_name' => 'Paul',
				'last_name' => 'Jurriens',
				'password' => Hash::make('123'),
				'email' => 'pjurriens@nmc.nl'
			),

			array(
				'type_id' => 2,
				'first_name' => 'Jesper',
				'last_name' => 'Plug',
				'password' => Hash::make('123'),
				'email' => 'jplug@nmc.nl'
			),

			array(
				'type_id' => 2,
				'first_name' => 'Bert',
				'last_name' => 'Giebels',
				'password' => Hash::make('123'),
				'email' => 'bgiebels@nmc.nl'
			),

			array(
				'type_id' => 2,
				'first_name' => 'Theo',
				'last_name' => 'Tromp',
				'password' => Hash::make('123'),
				'email' => 'ttromp@nmc.nl'
			),

			array(
				'type_id' => 3,
				'first_name' => 'Wouter',
				'last_name' => 'van Hezel',
				'password' => Hash::make('123'),
				'email' => 'whezel@nmc.nl'
			),

			array(
				'type_id' => 4,
				'first_name' => 'Alie',
				'last_name' => 'Blokhuis',
				'password' => Hash::make('123'),
				'email' => 'ablokhuis@nmc.nl'
			),

			array(
				'type_id' => 5,
				'first_name' => 'Sander',
				'last_name' => 'Boelsma',
				'password' => Hash::make('123'),
				'email' => 'sboelsma@nmc.nl'
			)
		);

		$department = array(

			array(
				'name' => 'Magazijn',
				'manager' => 7
			),
		);

		$type = array(

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
				'name' => 'CVB'
			)
		);

		$user_department = array(

			array(

			),
		);


		DB::table('user')->insert($user);

	}

}


?>