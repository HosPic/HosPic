<?php

class Question extends Eloquent {

	protected $table = 'question';

	public function answer(){

		return $this->hasMany('Answer');
	}

}