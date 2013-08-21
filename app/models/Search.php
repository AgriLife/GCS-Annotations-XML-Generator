<?php

class Search extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

    public function sites()
    {
    	return $this->belongsToMany('Site', 'searches_sites');
    }

    public function user()
    {
    	return $this->belongsTo('User');
    }
}