<?php

class ArticleController extends BaseController {

	public function index() {
		if (Request::ajax()) {
			// $response = Article::all()->take(20);
			if (Input::get('category')) {
				return Response::json(Article::where('category_id', '=', Input::get('category'))->get());
			} else {
				return Response::json(Article::all());
			}
		} else {
			// return View::make('pages.');
		}
		return 'lol';
	}
	
	public function show($id) {

	}

	public function create() {

	}

	public function edit($id) {

	}

	public function delete($id) {
		
	}

	public function update($id) {
		
	}
}
