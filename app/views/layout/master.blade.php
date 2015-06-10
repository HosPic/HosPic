<!DOCTYPE html>
<html lang="nl">
	<head>
		@include('partials.head')
	</head>
	<body>
		@include('partials.menu')
		<div class="search_bar">
			@yield('searchbar')
		</div>
		@yield('content')
		@include('partials.scripts')
	</body>
</html>