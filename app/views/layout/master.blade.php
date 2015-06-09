<!DOCTYPE html>
<html lang="nl">
	<head>
		@include('partials.head')
	</head>
	<body>
		@include('partials.menu')
		{{-- @include('partials.search') --}}
		<div></div>
		{{ HTML::script("js/vendor/jquery.js") }}
		{{ HTML::script("js/foundation.min.js") }}
		{{ HTML::script("js/foundation/foundation.topbar.js") }}
		@yield('script')
	</body>
</html>