@extends('layout.master')

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
							<li><a href="#">Medisch</a></li>
							<li><a href="#">Kantoor</a></li>
							<li class="active"><a href="#">ICT</a></li>
							<li><a href="#">Huishoudelijk</a></li>
							<li><a href="#">Meubilair</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				Placeholder
			</div>
			<div class="col-md-2 shopping_cart">
				Hoi
			</div>
@stop

@section('script')
@stop