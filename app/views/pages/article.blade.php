<?php
phpinfo();
die();
@extends('layout.master')

@section('title')
	voorraad-beheer
@stop

@section('style')
	{{ HTML::style('css/article.css') }}
@stop

@section('searchbar')
<form class="form-inline">
		<div class="col-md-4">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Zoeken...">
			</div>
			<div class="form-group">
			  <select class="form-control" id="category_filter">
			  	<option value="" selected disabled>Selecteer categorie</option>
			    <option>Alles</option>
			    <option>Medisch</option>
			    <option>Kantoor</option>
			    <option>ICT</option>
			    <option>Huishoudelijk</option>
			    <option>Meubilair</option>
			  </select>
			</div>
			<button type="submit" class="btn btn-default button_secondary_color">Zoek</button>
		</div>

		<div class="col-md-8">
		<div id="testadd">
				<p>test</p>

		</div>
	
			
		</div>
		
	</form>
@stop

@section('content')
<div class="container-fluid">
	<div class="row">

		<div class="col-md-10">
			<div id="test10">
				<p>ebola</p>
			</div>	
		</div>

  		<div class="col-md-2">
  			<div id="test2">
				<p>ebola</p>
			</div>	
  			
  		</div>

 	</div>
</div>


@stop