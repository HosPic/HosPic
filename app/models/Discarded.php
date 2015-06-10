<?php

class Discarded extends Eloquent {

	protected $table = 'discarded';

	public function article(){

		return $this->hasOne('Article');
	}

	public function price(){

		return $this->hasOne('Price');
	}

}