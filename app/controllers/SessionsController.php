<?php

use MyGames\Forms\LoginForm;

class SessionsController extends \BaseController {

	protected $loginForm;

	/**
	 * @var MyGames\Forms\LoginForm;
	 */
	public function __construct(LoginForm $loginForm)
	{
		$this->loginForm = $loginForm;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only('email', 'password');

		$this->loginForm->validate($input);

		if (Auth::attempt($input))
		{
			Flash::success('You have been logged in successfully!');
			return Redirect::intended('/');
		}

		Flash::error('Wrong Email and password combination.');
		return Redirect::back()->withInput();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id = null)
	{
		Auth::logout();

		Flash::message('You have been logged out.');
		return Redirect::home();
	}

}