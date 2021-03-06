@extends('layout.master')

@section('title')
	- Voorraad beheer
@stop

@section('style')
	{{ HTML::style("css/article.css") }}
@stop

@section('searchbar')
	<form class="form-inline">
		<div class="col-md-5">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Zoeken...">
			</div>
			<div class="form-group">

			  <select class="form-control" id="category_filter">
			  	<option value="" selected disabled>Selecteer categorie</option>
			  	<option>Alles</option>

			  	<!-- Show al article categories available -->
			  	@foreach ($categories as $category)
			    	<option>{{ $category->name }}</option>
			    @endforeach
			
			  </select>

			</div>
			<button type="submit" class="btn btn-default button_secondary_color">Zoek</button>
		</div>

		<div class="col-md-3" id="new-article">
			<div id="new-article-align">
				<button onclick="test()" class="btn btn-default button_secondary_color">+ Artikel</button>
			</div>
		</div>
	</form>
@stop

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10">
				<div id="product_header" class="row">
						<div class="col-sm-2"></div>
						<div class="col-sm-4 padding_10">Artikel</div>
						<div class="col-sm-2 padding_10">Eenheid</div>
						<div class="col-sm-2 padding_10">Prijs per eenheid</div>
						<div class="col-sm-2 padding_10">Voorraad</div>
					</div>
					<div id="article_list">
						@foreach ($articles as $article)
							@foreach ($article->price as $price)
								<div class="row">
									<div class="col-sm-2 padding_10">
										<img src="{{ $article->picture }}">
									</div>
									<div class="col-sm-4 product_article">{{ $article->name }}</div>
									<div class="col-sm-2 product_unit">{{ $article->unit }}</div>
									<div class="col-sm-2 product_price">&#8364; {{ $price->price }}</div>
		 							<div class="col-sm-2 product_supply">{{ $price->supply}}</div>
								</div>
							@endforeach
						@endforeach
					</div>

			</div>

	  		<div class="col-md-2">
	  			<div id="notifications" class="row">
					<div id="notifications_header">
						<h3>Notifications</h3>
					</div>
				</div>	
	  			
	  		</div>

	 	</div>
	</div>
@stop

@section('script')
	{{ HTML::script('js/article.js')}}
@stop