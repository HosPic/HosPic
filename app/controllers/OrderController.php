<?php

class OrderController extends BaseController {

	public function index() {
		if (Request::ajax()) {
			$product_id = Input::get('product_id');
			$product_amount = Input::get('product_amount');
			$product_price = Input::get('product_price');
			$product_price = ltrim($product_price, "€ ");
			$product_name = Input::get('product_name');

			$cart = array('product_id'=>$product_id, 'amount'=>$product_amount, 'price' =>$product_price, 'name'=>$product_name);
			
			Session::push("shopping_cart", $cart);

			$shopping_cart = array();
			foreach (Session::get('shopping_cart') as $value) {
				if(array_key_exists($value['product_id'], $shopping_cart)) {
					$shopping_cart[$value['product_id']]['amount'] += $value['amount'];
				} else {
					$shopping_cart[$value['product_id']] = $value;
				}
			}
			Session::put('shopping_cart', $shopping_cart);
			// return Response::json(Session::get('shopping_cart'));
		} else {

			$categories = Category::where('type', '<', 2)->orderBy('name')->get();
			$products = Article::orderBy('name')->take(10)->get();
			$shopping_cart = array();
			if (Session::has('shopping_cart')) {
				$shopping_cart = Session::get('shopping_cart');
			}

			return View::make('pages.order', array('categories'=>$categories, 'products'=>$products, 'shopping_cart'=>$shopping_cart));
		}
	}

	public function show($id) {
		if (Request::wantsJson()){
			return Response::json(Order::find($id));
		}
		return 'lol';
	}

	public function special() {

	}
}
