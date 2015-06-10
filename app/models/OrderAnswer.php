<?php

class OrderAnswer extends Eloquent {

	protected $table = 'order_answer';

	public function question(){

		return $this->hasOne('Question');
	}

}