@extends('layout.master')

@section('style')
	{{ HTML::style("css/order.css")}}
@stop

@section('searchbar')
	<form>
		<div class="small-4 medium-3 large-2 columns">
			<input type="text" placeholder="Zoeken...">
		</div>
		<div class="small-3 medium-2 large-1 columns end">
			<a href="#" class="button postfix button_secondary_color">Zoek</a>
		</div>
	</form>
@stop

@section('content')
	<div class="small-2 large-2 columns">
		<ul class="side-nav">
			<li class="active"><a href="#">Medisch</a></li>
			<li><a href="#">Kantoor</a></li>
			<li><a href="#">ICT</a></li>
			<li><a href="#">Huishoudelijk</a></li>
			<li><a href="#">Meubilair</a></li>
		</ul>
	</div>
	<div class="small-8 large-8 columns">
		Placeholder
	</div>
	<div class="small-2 large-2 columns">
		<div class="">
			Hoi
		</div>
	</div>
@stop

@section('script')
@stop