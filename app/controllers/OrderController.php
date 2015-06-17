<?php

class OrderController extends BaseController {

	public function index() {
		return View::make('pages.order');
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
