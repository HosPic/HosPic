<?php

class Article extends Eloquent {

	protected $table = 'article';
	public $timestamps = false;

	public $with = array('category', 'price');

	public function category(){
		return $this->belongsTo('Category');
	}

	public function question(){
		return $this->hasMany('Question');
	}

	public function price(){
		return $this->hasMany('Price')->where('supply', '>', 0);
	}

	public static function retrieve_articles($filter){
		
		return Article::all();
	
	}
}