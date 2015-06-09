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
			<li class="active"><a href="{{ URL::route('getOrder'); }}">Artikelen bestellen</a></li>
			<li><a href="{{ URL::route('getOrder'); }}">Speciale bestelling</a></li>
			<li><a href="{{ URL::route('getService'); }}">Dienst aanvragen</a></li>
			<li><a href="{{ URL::route('getDeliver'); }}">Mijn aanvragen</a></li>
			<li><a href="{{ URL::route('getMyOrders'); }}">Mijn bestellingen</a></li>
			{{-- @if (User::canView("voorraad beheer")) --}}
				<li><a href="{{ URL::route('getArticles'); }}">Voorraad beheer</a></li>
			{{-- @elseif (User::canView("bezorglijst")) --}}
				<li><a href="{{ URL::route('getDeliver'); }}">Bezorglijst</a></li>
			{{-- @elseif (User::canView("statistieken")) --}}
				<li><a href="{{ URL::route('getStatistics'); }}">Statistieken</a></li>
			{{-- @endif --}}
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="{{ URL::route('getLogout'); }}">Uitloggen</a></li>
		</ul>
	</div>
</nav>