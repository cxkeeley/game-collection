<?php

# Home
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

# Signup
Route::get('/signup', 'SignupController@create')->before('guest');
Route::post('/signup', ['as' => 'signup.store', 'uses' => 'SignupController@store']);

# Authentication
Route::get('logout', ['as' => 'login', 'uses' => 'SessionsController@destroy']);
Route::get('login', ['as' => 'logout', 'uses' => 'SessionsController@create']);
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);

# Games
Route::resource('games', 'GamesController');

# Profile
Route::resource('profile', 'ProfilesController', ['only' => ['show', 'edit', 'update']]);
Route::get('/{profile}', ['as' => 'profile', 'uses' => 'ProfilesController@show']);

Route::get('reporting', function()
{
    return 'secret financial reports';
})->before('role:owner');