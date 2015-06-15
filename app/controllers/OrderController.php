<?php

class OrderController extends BaseController {

	public function index() {
		$categories = Category::where('type', '<', 2)->orderBy('name')->get();
		$products = Article::with('Price')->orderBy('name')->take(10)->get();
		// $products['price'] = Article::find(1)->price;

		return View::make('pages.order', array('categories'=>$categories, 'products'=>$products));
	}
		
	public function show() {
		
	}

	public function special() {
		
	}
}
