<?php

class Profile extends Eloquent {

    protected $fillable = [
        'location',
        'bio',
        'twitter_username',
        'facebook_username',
        'github_username',
        'thumbnail'
    ];

    public function user()
    {
        return $this->belongsTo('User');
    }
}