<?php

class OrderController extends BaseController {

	public function index() {
		return View::make('pages.order');
	}
		
	public function show() {
		
	}

	public function special() {
		
	}

	public function getCategorie($categorie) {
		return View::make('pages.order');
	}
}
