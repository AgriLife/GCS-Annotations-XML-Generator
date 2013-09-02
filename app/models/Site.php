<?php

class Site extends Ardent {
    protected $guarded = array();

    public static $rules = array();

    public function searches()
    {
    	return $this->belongsToMany('Search', 'searches_sites');
    }

    public function user()
    {
    	return $this->belongsTo('User');
    }
}