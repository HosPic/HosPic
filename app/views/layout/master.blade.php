<!DOCTYPE html>
<html lang="nl">
	<head>
		@include('partials.head')
	</head>
	<body>
		@include('partials.menu')
		<div></div>
		{{ HTML::script("js/vendor/jquery.js") }}
		{{ HTML::script("js/foundation.min.js") }}
		@yield('script')
	</body>
</html>