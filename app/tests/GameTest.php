<?php

class GameTest extends AppTester {

	/**	@test */
	public function it_fetches_games()
	{
		$this->makeGame();
		
		$response = $this->call('GET', 'games');
		$games = $response->original->getData()['games'];

		$this->assertResponseOk();
		$this->assertViewHas('games');
		$this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $games);
	}

	private function makeGame($gameFields = [])
	{
		$game = array_merge([
			'user_id' 	=> 1,
			'title' 	=> $this->fake->sentence,
			'publisher' => $this->fake->word,
			'completed' => $this->fake->boolean
		], $gameFields);

		Game::create($game);
	}
}