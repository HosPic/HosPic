<?php

class Article extends Eloquent {

	protected $table = 'article';
	public $timestamps = false;
	
	public function category(){

		return $this->hasOne('Category');
	}

	public function question(){

		return $this->hasMany('Question');
	}

	public function price(){

		return $this->hasMany('Price');
	}

}