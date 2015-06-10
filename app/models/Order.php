<?php

class Order extends Eloquent {

	protected $table = 'order';

	public function user(){

		return $this->hasOne('User');
	}

	public function department(){

		return $this->hasOne('Department');
	}

	public function order_article(){

		return $this->hasMany('OrderArticle');
	}
}