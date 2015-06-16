<?php

class ArticleController extends BaseController {

	public function index() {
		$categories = Category::where('type', '<', 2)->get();	
		return Response::json($categories);
		
		 return View::make('pages/article')->with('');
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
