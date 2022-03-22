<?php

use MyGames\Forms\ProfileForm;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProfilesController extends \BaseController {

	protected $profileForm;

	/**
	 * @var MyGames\Forms\ProfileForm
	 */
	public function __construct(ProfileForm $profileForm)
	{
		$this->profileForm = $profileForm;

		$this->beforeFilter('currentUser', ['only' => 'edit', 'update']);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  $username
	 * @return Response
	 */
	public function show($username)
	{
		try
		{
			$user = User::with('profile')->whereUsername($username)->firstOrFail();
		}
		catch (ModelNotFoundException $e)
		{
			return Redirect::home();
		}

		return View::make('profile.show', compact('user'));
	}

	public function edit($username)
	{
		$user = User::whereUsername($username)->firstOrFail();

		return View::make('profile.edit')->withUser($user);
	}

	public function update($username)
	{
		$user = User::whereUsername($username)->firstOrFail();

		$input = Input::only(
			'location',
			'bio',
			'twitter_username',
			'facebook_username',
			'github_username'
		);

		$this->profileForm->validate($input);

		$user->profile->fill($input)->save();

		Flash::success('Profile updated successfully!');
		return Redirect::route('profile.edit', $user->username);
	}

}