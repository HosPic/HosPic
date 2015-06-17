<?php

class ArticleController extends BaseController {

	public function index() {
		if (Request::ajax()) {
			$res = Article::select('*')->orderBy('name');
			if (Input::has('category')) {
				$res->where('category_id', '=', Input::get('category', 0));
			}

			$ret['count'] = $res->count();

			if (Input::get('skip') > 1) {
				$res->skip(Input::get('skip'));
			}
	
			$res->take(10);
			$ret['data'] = $res->get();

			return Response::json($ret);
		} else {
			$categories = Category::where('type', '<', 2)->orderBy('name')->get();
			$products = Article::orderBy('name')->take(10)->get();

			return View::make('pages.article', array('categories'=>$categories, 'products'=>$products));
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
