<?php

class OrderController extends BaseController {

	public function index() {
		if (Request::ajax()) {
			$product_id = Input::get('product_id');
			$product_amount = Input::get('product_amount');

			
			Session::push("shopping_cart.id", $product_id);
			Session::push("shopping_cart.amount", $product_amount);
			//Session::push("shopping_cart['product_id']", $product_id);
			return Session::get('shopping_cart');
		}

		$categories = Category::where('type', '<', 2)->orderBy('name')->get();
		$products = Article::orderBy('name')->take(10)->get();
		$shopping_cart = NULL;
		if (Session::has('shopping_cart')) {
			$shopping_cart = Article::find(Session::get('shopping_cart.id'));
		}

		return View::make('pages.order', array('categories'=>$categories, 'products'=>$products, 'shopping_cart'=>$shopping_cart));
	}
		
	public function show() {
		
	}

	public function special() {
		
	}
}
