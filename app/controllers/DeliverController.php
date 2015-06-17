<?php

class DeliverController extends BaseController {

	public function index() {
		$orders = Order::whereIn('status',array(2,3))->get();

		if(Request::wantsJson()){
			return Response::json(array('orders'=>$orders));
		}else{
			return View::make('pages.deliver')->with('orders',$orders);
		}

	}

}