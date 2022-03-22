<?php

class Game extends BaseModel {
    
    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $softDelete = true;

    protected static $rules = [
        'title' => 'required',
        'publisher' => 'required'
    ];

    public function user()
    {
        return $this->belongsTo('User');
    }
}