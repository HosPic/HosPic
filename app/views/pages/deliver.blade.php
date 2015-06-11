@extends('layout.withoutSearch')

@section('title')
	- Bezorgen
@stop

@section('style')
	{{ HTML::style("css/deliver.css")}}
@stop

@section('content')
	<div id="content">
		<div id="ordersBar">
			@foreach (range(0,20) as $i)
				<div class="order">
					<div class="order-info">
						<h3>Frank Blom<small>+31 612 345 678</small></h3>
						<span>Kantoor overig</span>
						<span>Gebouw 32</span>
						<span>Kamer 12</span>
					</div>
					<div class="order-date">
						<span>21 Mei</span>
					</div>
				</div>
			@endforeach
		</div>
		<div id="orderContent">
			<div id="orderInfo" class="row">
				<div class="col-md-4">
					<h2>Frank Blom</h2>
					<span>+31 612 345 678</span>
					<span>fblom&#64;nmc.nl</span>
				</div>
				<div class="col-md-4">
					<b>Locatie</b>
					<span>kantoor overig</span>
					<span>Gebouw 23</span>
					<span>Kamer 134</span>
				</div>
				<div class="col-md-4">
					<b>Datum</b>
					<span>Besteld: 24 mei</span>
					<span>Levering: 25 mei</span>
				</div>
			</div>
			<div id="orderArticles">
				<table class="table">
					<thead></thead>
					<tbody>
						<tr>
							<th></th>
							<th>ArtikelCode</th>
							<th>ArtikelNaam</th>
							<th>Locatie</th>
							<th>Aantal</th>
						</tr>
						<tr>
							<td></td>
							<td>123456</td>
							<td>Papier</td>
							<td>GB34</td>
							<td>28</td>
						</tr>
						<tr>
							<td></td>
							<td>123456</td>
							<td>Papier</td>
							<td>GB34</td>
							<td>28</td>
						</tr>
						<tr>
							<td></td>
							<td>123456</td>
							<td>Papier</td>
							<td>GB34</td>
							<td>28</td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>
	</div>
@stop

@section('script')
	{{ HTML::script("js/deliver.js")}}
@stop