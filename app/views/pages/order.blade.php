@extends('layout.master')

@section('title')
	- Bestellen
@stop

@section('style')
	{{ HTML::style("css/order.css")}}
@stop

@section('searchbar')
	<form class="form-inline">
		<div class="col-md-4">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Zoeken...">
			</div>
			<button type="submit" class="btn btn-default button_secondary_color">Zoek</button>
		</div>
	</form>
@stop

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				<div class="panel panel-default">
					<div class="panel-heading">Categorieën</div>
					<div class="panel-body">
						<ul class="nav nav-pills nav-stacked">
							<li class="active"><a>Alles</a></li>
							@foreach ($categories as $categorie)
								<li data-category-id="{{ $categorie->id }}"><a>{{ $categorie->name }}</a></li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div id="product_header" class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-4 padding_10">Artikel</div>
					<div class="col-sm-2 padding_10">Eenheid</div>
					<div class="col-sm-2 padding_10">Prijs per eenheid</div>
					<div class="col-sm-2"></div>
				</div>
				<div id="product_list">
					@foreach ($products as $product)
						<div class="row">
							<div class="col-sm-2 padding_10">
								<img src="{{ $product->picture }}">
							</div>
							<div class="col-sm-4 product_article">{{ $product->name }}</div>
							<div class="col-sm-2 product_unit">{{ $product->unit }}</div>
							<div class="col-sm-2 product_price">&#8364; {{ $product->price[0]->price }}</div>
							<div class="col-sm-2 product_input">
								<input type="text" class="form-control" value="1">
								<button type="submit" class="btn btn-default button_secondary_color button_add" data-article-id="{{ $product->id }}">+</button>
							</div>
						</div>
					@endforeach
				</div>
			</div>
			<div class="col-md-2">
				<div id="shopping_cart" class="row">
					<div id="shopping_cart_header">
						<h3>Winkelwagen</h3>
					</div>
					<div id="shopping_cart_content">
					@if (!empty($shopping_cart))
						@foreach ($shopping_cart as $cart)
							<div class="col-sm-12">{{ $cart['name'] }}</div>
							<div class="col-sm-2">
								<input value="{{ $cart['amount'] }}">
							</div>
							<div class="col-sm-1">x</div>
							<div class="col-sm-2">{{ $cart['price'] }}</div>
							<div class="col-sm-1">=</div>
							<div class="col-sm-2">{{ $cart['price'] * $cart['amount']}}</div>
							<div class="col-sm-2 pull-right">{{ $cart['price'] * $cart['amount']}}</div>
						@endforeach
					@endif
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('script')
	{{ HTML::script('js/order.js')}}
@stop