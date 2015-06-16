<?php

class OrderController extends BaseController {

	public function index() {
		if (Request::ajax()) {
			$product_id = Input::get('product_id');
			$product_amount = Input::get('product_amount');
			$product_price = Input::get('product_price');
			$product_name = Input::get('product_name');

			$cart = array('product_id'=>$product_id,'amount'=>$product_amount, 'price' =>$product_price, 'name'=>$product_name);
			
			Session::push("shopping_cart", $cart);

			$shopping_cart = array();
			foreach (Session::get('shopping_cart') as $value) {
				if(array_key_exists($value['product_id'], $shopping_cart)) {
					$shopping_cart[$value['product_id']] += $value['amount'];
				} else {
					$shopping_cart[$value['product_id']] = $value['amount'];
				}
			}
			return Response::json(array_keys($shopping_cart));
		}

		$categories = Category::where('type', '<', 2)->orderBy('name')->get();
		$products = Article::orderBy('name')->take(10)->get();
		$shopping_cart = array();
		$cart = Null;
		if (Session::has('shopping_cart')) {
			foreach (Session::get('shopping_cart') as $value) {
				
				if(array_key_exists($value['product_id'], $shopping_cart)) {
					$shopping_cart['amount'] += $value['amount'];
				} else {
					$shopping_cart['amount'] = $value['amount'];
				}
				$shopping_cart['id'] = $value['product_id'];
				$shopping_cart['name'] = Article::where('id', '=', $value['product_id'])->get();
				$shopping_cart['price'] = Article::where('id', '=', $value['product_id'])->get();
			}
			//$shopping_cart['data'] = Article::find(array_keys($shopping_cart));
		}

		return View::make('pages.order', array('categories'=>$categories, 'products'=>$products, 'shopping_cart'=>$shopping_cart));
	}
		
	public function show() {
		
	}

	public function special() {
		
	}
}
