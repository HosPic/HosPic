<?php

class DeliverController extends BaseController {

	public function index() {
		$orders = Order::whereIn('status',array(2,3))->get();
		// if(Request::ajax()){
			// return Response::json($orders);
		// }
		return View::make('pages.deliver')->with('orders',$orders);
	}

}