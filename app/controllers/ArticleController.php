<?php

class ArticleController extends BaseController {

	public function index() {
		if (Request::wantsJson()) {
			// $response = Article::all()->take(20);
			return Response::json(Article::all());
		} else {
			// return View::make('pages.')
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
