<?php

class GamesTableSeeder extends Seeder {

	public function run()
	{
        Game::create([
            'user_id' => 1,
            'title' => 'Battlefield',
            'publisher' => 'Electronic Arts',
            'completed' => true
        ]);

		Game::create([
            'user_id' => 1,
            'title' => 'Call of Duty',
            'publisher' => 'Activision',
            'completed' => true
        ]);

        Game::create([
            'user_id' => 1,
            'title' => 'Grand Theft Auto V',
            'publisher' => 'Rockstar',
            'completed' => true
        ]);

        Game::create([
            'user_id' => 1,
            'title' => 'SSX',
            'publisher' => 'Electronic Arts',
            'completed' => false
        ]);

        Game::create([
            'user_id' => 1,
            'title' => 'Dead Space 3',
            'publisher' => 'Electronic Arts',
            'completed' => false
        ]);

        Game::create([
            'user_id' => 1,
            'title' => 'Rayman Origins',
            'publisher' => 'Ubisoft',
            'completed' => false
        ]);
	}

}