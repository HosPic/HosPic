<?php

class OrderController extends BaseController {

	public function index() {
		$categories = Category::where('type', '<', 2)->orderBy('name')->get();

		return View::make('pages.order', array('categories'=>$categories));
	}
		
	public function show() {
		
	}

	public function special() {
		
	}
}
