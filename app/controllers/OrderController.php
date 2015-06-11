<?php

class OrderController extends BaseController {

	public function index() {
		$categories = Category::all();

		return View::make('pages.order', array('categories'=>$categories));
	}
		
	public function show() {
		
	}

	public function special() {
		
	}

	public function getCategorie($categorie) {
		$categories = Category::all();

		return View::make('pages.order', array('categories'=>$categories));
	}
}
