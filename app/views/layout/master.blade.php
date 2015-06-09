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
		{{ HTML::script("js/vendor/jquery.js") }}
		{{ HTML::script("js/foundation.min.js") }}
		@yield('script')
		<script>
			$(document).foundation();
		</script>
	</body>
</html>