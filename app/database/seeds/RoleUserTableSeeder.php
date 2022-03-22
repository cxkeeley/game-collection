<?php

class RoleUserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 1
        ]);
    }

}