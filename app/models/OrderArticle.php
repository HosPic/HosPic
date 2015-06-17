<?php

class OrderArticle extends Eloquent {

	protected $table = 'order_article';
	public $timestamps = false;
	public $with = array('article','price');

	public function article(){
		return $this->hasOne('Article','id','article_id');
	}

	public function price(){
		return $this->hasOne('Price','id','price_id');
	}

	public function order_answer(){
		return $this->hasMany('OrderAnswer');
	}

}