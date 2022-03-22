<?php

class DatabaseSeeder extends Seeder {

	/**
	 * @var array
	 */
	private $tables = [
		'users',
		'roles',
		'role_user',
		'games',
		'profiles'
	];

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->cleanDatabase();

		Eloquent::unguard();

		$this->call('UsersTableSeeder');
		$this->call('RolesTableSeeder');
		$this->call('RoleUserTableSeeder');
		$this->call('GamesTableSeeder');
		$this->call('ProfilesTableSeeder');
	}

	/**
	 * 
	 */
	private function cleanDatabase()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS=0');

		foreach ($this->tables as $tableName)
		{
			DB::table($tableName)->truncate();
		}

		DB::statement('SET FOREIGN_KEY_CHECKS=1');
	}

}