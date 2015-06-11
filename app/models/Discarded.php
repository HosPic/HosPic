<?php

class Discarded extends Eloquent {

	protected $table = 'discarded';
	public $timestamps = false;
	
	public function article(){

		return $this->hasOne('Article');
	}

	public function price(){

		return $this->hasOne('Price');
	}

}