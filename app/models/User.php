<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'user';

	protected $hidden = array('password', 'remember_token');

	// Relations
	public function type(){
		return $this->hasOne('Type');
	}

	public function department(){
		return $this->beloongsToMany('Department', 'user_department');
	}
}
