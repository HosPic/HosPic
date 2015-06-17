<?php

class OrderController extends BaseController {

	public function index() {
		// return View::make('pages.order');
		$orders = Order::whereIn('status',array(2,3))->get();

		if(Request::wantsJson()){
			return Response::json(array('orders'=>$orders));
		}else{
			return View::make('pages.deliver')->with('orders',$orders);
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

	public function getCategorie($categorie) {
		return View::make('pages.order');
	}
}
