<?php

class RolesTableSeeder extends Seeder {

	public function run()
	{
		Role::create([
            'name' => 'user'
        ]);
        
        Role::create([
            'name' => 'administrator'
        ]);
	}

}