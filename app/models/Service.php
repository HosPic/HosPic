<?php

class Service extends Eloquent {

	protected $table = 'service';

	public function category(){

		return $this->hasOne('Category')
	}

	public function user(){

		return $this->hasOne('User')
	}

}