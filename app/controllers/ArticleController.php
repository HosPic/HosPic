<?php

class ArticleController extends BaseController {

	public function index() {


		$filter = '';

		$categories = Category::where('type', '<', 2)->get();
/*		$articles = Article::retrieve_articles($filter);	
*/		/*return Response::json($articles);*/
		$articles = Article::orderBy('name')->take(10)->get();
		

		 return View::make('pages/article')->with('categories',$categories)->with('articles',$articles);
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
