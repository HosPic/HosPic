<?php

class Request extends Eloquent {

	protected $table = 'request';

	public function user(){

		return $this->hasOne('User');
	}

}