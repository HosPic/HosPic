<?php

class UserSeeder extends Seeder{
	public function run() {
		DB::table('user')->truncate(); /*reset auto increment purpose(truncate)*/
		DB::table('user_department')->delete();

		$users = array(
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

		$user_departments = array(
			array(
				'user_id' => 1,
				'department_id' => 4
			),

			array(
				'user_id' => 2,
				'department_id' => 7
			),

			array(
				'user_id' => 2,
				'department_id' => 6
			),

			array(
				'user_id' => 2,
				'department_id' => 10   
			),

			array(
				'user_id' => 3,
				'department_id' => 9
			),

			array(
				'user_id' => 4,
				'department_id' => 7
			),

			array(
				'user_id' => 5,
				'department_id' => 4
			),

			array(
				'user_id' => 6,
				'department_id' => 5
			),

			array(
				'user_id' => 7,
				'department_id' => 1
			),

			array(
				'user_id' => 8,
				'department_id' => 2
			),

			array(
				'user_id' => 9,
				'department_id' => 4
			),


			array(
				'user_id' => 10,
				'department_id' => 3
			),

			array(
				'user_id' => 11,
				'department_id' => 3
			)

		);

		DB::table('user')->insert($users);
		DB::table('user_department')->insert($user_departments);
	}
}