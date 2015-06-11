<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'user';

	public $timestamps = false;
	
	protected $hidden = array('password', 'remember_token');

	public function canView($page){
		$pages = array(	'getArticles'=>array('Administratie'),
						'getDeliver'=>array('ICT','Magazijn','Facilitaire Diensten'),
						'getStatistics'=>array('Directie')
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

	public function getDefaultPage()
	{
		$defaults = array(
			'Directie' => 'getStatistics',
			'Administratie' => 'getArticles',
			'ICT' => 'getDeliver',
			'Magazijn' => 'getDeliver',
			'Facilitaire Diensten' => 'getDeliver',
		);
		foreach ($this->departments as $deparment) {
			if(array_key_exists($deparment->name, $defaults)){
				return $defaults[$deparment->name];
			}
		}
		return 'getOrder';
	}

	// Relations
	public function type(){
		return $this->hasOne('Type');
	}

	public function departments(){
		return $this->belongsToMany('Department', 'user_department');
	}
}
