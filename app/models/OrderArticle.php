<?php

class OrderArticle extends Eloquent {

	protected $table = 'order_article';
	public $timestamps = false;
	
	public function article(){

		return $this->hasOne('Article')
	}

	public function price(){

		return $this->hasOne('Price');
	}

	public function order_answer(){

		return $this->hasMany('OrderAnswer');
	}

}