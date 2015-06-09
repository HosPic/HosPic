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
		{{ HTML::script("https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js") }}
		{{ HTML::script("js/boostrap.min.js") }}
		@yield('script')
	</body>
</html>