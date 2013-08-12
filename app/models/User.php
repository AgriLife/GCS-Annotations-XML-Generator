<?php

use Zizaco\Confide\ConfideUser;
use Zizaco\Entrust\HasRole;

class User extends ConfideUser {

	use HasRole;

	public function sites()
	{
		return $this->hasMany('Site');
	}

	public function searches()
	{
		return $this->hasMany('Search');
	}

}