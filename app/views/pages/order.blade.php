@extends('layout.master')

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
							<li class="{{ HTML::activeState('bestellen') }}"><a href="{{ URL::route('getOrder') }}">Alles</a></li>
							<li class="{{ HTML::activeState('bestellen/medisch') }}"><a href="{{ URL::route('getCategorie', 'medisch') }}">Medisch</a></li>
							<li class="{{ HTML::activeState('bestellen/kantoor') }}"><a href="{{ URL::route('getCategorie', 'kantoor') }}">Kantoor</a></li>
							<li class="{{ HTML::activeState('bestellen/ict') }}"><a href="{{ URL::route('getCategorie', 'ict') }}">ICT</a></li>
							<li class="{{ HTML::activeState('bestellen/huishoudelijk') }}"><a href="{{ URL::route('getCategorie', 'huishoudelijk') }}">Huishoudelijk</a></li>
							<li class="{{ HTML::activeState('bestellen/meubilair') }}"><a href="{{ URL::route('getCategorie', 'meubilair') }}">Meubilair</a></li>
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
@stop