<?php

class Request extends Eloquent {

	protected $table = 'request';
	public $timestamps = false;
	
	public function user(){

		return $this->hasOne('User');
	}

}