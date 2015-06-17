<?php

class Order extends Eloquent {

	protected $table = 'order';
	public $timestamps = false;
	public $with = array('articles','user','department');

	// accessors
	public function getDeliveryDateAttribute($datetime){
		return strftime("%e %b",strtotime($datetime));
	}

	public function getOrderDateAttribute($datetime){
		return strftime("%e %b",strtotime($datetime));
	}

	// mutators

	// relations
	public function user(){
		return $this->belongsTo('User');
	}

	public function department(){
		return $this->belongsTo('Department');
	}

	public function articles(){
		return $this->hasMany('OrderArticle','order_id','id');
	}
}