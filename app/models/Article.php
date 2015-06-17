<?php

class Article extends Eloquent {

	protected $table = 'article';
	public $timestamps = false;
	public $with = array('category');

	public function category(){
		return $this->belongsTo('Category');
	}

	public function question(){
		return $this->hasMany('Question');
	}

	public function price(){
		return $this->hasMany('Price');
	}

}