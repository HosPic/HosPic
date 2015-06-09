<nav class="top-bar primary_color" data-topbar role="navigation">
	<ul class="title-area secondary_color">
		<li class="name">
			<h1><a href='#'>HosPic</a></h1>
		</li>
		<li class="toggle-topbar menu-icon">
			<a href="#"><span>Menu</span></a>
		</li>
	</ul>
	<section class="top-bar-section">
		<ul class="right">
			<li><a href="#">Uitloggen</a></li>
		</ul>
		<ul class="left">
			<li class="active"><a href="#">Artikelen bestellen</a></li>
			<li><a href="#">Speciale bestelling</a></li>
			<li><a href="#">Dienst aanvragen</a></li>
			<li><a href="#">Mijn aanvragen</a></li>
			<li><a href="#">Mijn bestellingen</a></li>
			{{-- @if (User::canView("voorraad beheer")) --}}
				<li><a href="#">Voorraad beheer</a></li>
			{{-- @elseif (User::canView("bezorglijst")) --}}
				<li><a href="#">Bezorglijst</a></li>
			{{-- @elseif (User::canView("statistieken")) --}}
				<li><a href="#">Statistieken</a></li>
			{{-- @endif --}}
		</ul>
	</section>
</nav>