<?php

class ProfilesTableSeeder extends Seeder {

    public function run()
    {
        Profile::create([
            'user_id' => 1,
            'location' => 'Sheffield',
            'bio' => 'Web Developer who likes offensive background colours!',
            'twitter_username' => 'bwalkermills',
            'facebook_username' => 'bwalkermills',
            'github_username' => 'byronbyron'
        ]);
    }

}