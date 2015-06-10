<nav class="navbar navbar-default primary_color" role="navigation">
	<div class="navbar-header secondary_color">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="{{ URL::to('/'); }}">HosPic</a>
	</div>

	<div class="collapse navbar-collapse" id="topbar">
		<ul class="nav navbar-nav">
			<li class="{{ HTML::activeState('bestellen') }}"><a href="{{ URL::route('getOrder'); }}">Artikelen bestellen</a></li>
			<li class="{{ HTML::activeState('special') }}"><a href="{{ URL::route('getSpecialOrder'); }}">Speciale bestelling</a></li>
			<li class="{{ HTML::activeState('diensten') }}"><a href="{{ URL::route('getService'); }}">Dienst aanvragen</a></li>
			<li class="{{ HTML::activeState('aanvragen') }}"><a href="{{ URL::route('getMyServices'); }}">Mijn aanvragen</a></li>
			<li class="{{ HTML::activeState('bestellingen') }}"><a href="{{ URL::route('getMyOrders'); }}">Mijn bestellingen</a></li>
			@if (Auth::user()->canView("voorraad beheer"))
				<li class="{{ HTML::activeState('artikelen') }}"><a href="{{ URL::route('getArticles'); }}">Voorraad beheer</a></li>
			@elseif (Auth::user()->canView("bezorglijst"))
				<li class="{{ HTML::activeState('leveringen') }}"><a href="{{ URL::route('getDeliver'); }}">Bezorglijst</a></li>
			@elseif (Auth::user()->canView("statistieken"))
				<li class="{{ HTML::activeState('statistieken') }}"><a href="{{ URL::route('getStatistics'); }}">Statistieken</a></li>
			@endif
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="{{ URL::route('getLogout'); }}">Uitloggen</a></li>
		</ul>
	</div>
</nav>