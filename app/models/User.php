<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'user';

	protected $hidden = array('password', 'remember_token');

	public function canView($page){
		$pages = array(	'voorraad beheer'=>array('administratie'),
						'bezorglijst'=>array('ict','magazijn','facilitaire diensten'),
						'statistieken'=>array('directie')
						);
		if(!array_key_exists($page,$pages)){
			return false;
		}
		foreach ($this->departments as $deparment) {
			if( in_array($deparment->name, $pages[$page])){
				return true;
			}
		}
		return false;
	}

	// Relations
	public function type(){
		return $this->hasOne('Type');
	}

	public function departments(){
		return $this->belongsToMany('Department', 'user_department');
	}
}
