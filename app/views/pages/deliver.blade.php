@extends('layout.withoutSearch')

@section('title')
	- Bezorgen
@stop

@section('style')
	{{ HTML::style("css/deliver.css")}}
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
@stop

@section('content')
	<div id="content">
		<div id="ordersBar">
		</div>
		<div id="orderContent" class="">
			<div id="orderInfo" class="row">
			</div>
			<div id="orderArticles">
			</div>
			<div id="orderLoader">
				<p id="noSelect">Selecteer een bestelling</p>
				<p id="loading"><span class="spin"></span> Bestelling laden...</p>
				<p id="empty">Er zijn geen bestellingen meer!</p>
			</div>
		</div>
	</div>
@stop

@section('script')
	{{ HTML::script("js/deliver.js")}}
@stop