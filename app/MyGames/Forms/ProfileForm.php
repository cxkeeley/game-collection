<?php namespace MyGames\Forms;

use Laracasts\Validation\FormValidator;

class ProfileForm extends FormValidator {

    /**
     * Validation rules for registering
     * 
     * @var array
     */
    protected $rules = [
        'location'          => '',
        'bio'               => '',
        'twitter_username'  => '',
        'facebook_username' => '',
        'github_username'   => ''
    ];
}