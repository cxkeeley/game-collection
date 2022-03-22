<?php namespace MyGames\Forms;

use Laracasts\Validation\FormValidator;

class LoginForm extends FormValidator {

    /**
     * Validation rules for registering
     * 
     * @var array
     */
    protected $rules = [
        'email'    => 'required|email',
        'password' => 'required'
    ];
}