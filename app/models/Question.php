<?php

class Question extends Eloquent {

	protected $table = 'question';
	public $timestamps = false;
	
	public function answer(){

		return $this->hasMany('Answer');
	}

}