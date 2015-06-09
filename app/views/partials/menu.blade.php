<nav class="top-bar primary_color" data-topbar role="navigation">
	<ul class="title-area secondary_color">
		<li class="name">
			<h1><a href="{{ URL::to('/'); }}">HosPic</a></h1>
		</li>
		<li class="toggle-topbar menu-icon">
			<a href=""><span>Menu</span></a>
		</li>
	</ul>
	<section class="top-bar-section">
		<ul class="right">
			<li><a href="{{ URL::route('getLogout'); }}">Uitloggen</a></li>
		</ul>
		<ul class="left">
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
	</section>
</nav>