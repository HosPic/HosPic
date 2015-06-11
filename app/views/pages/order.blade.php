@extends('layout.master')

@section('title')
	- Bestellen
@stop

@section('style')
	{{ HTML::style("css/order.css")}}
@stop

@section('title')
	- Bestellen
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
				Placeholder
			</div>
			<div id="shopping_cart" class="col-md-2">
				Hoi
			</div>
		</div>
	</div>
@stop

@section('script')
	{{ HTML::script('js/order.js')}}
@stop