<!DOCTYPE html>
<html lang="nl">
	<head>
		@include('partials.head')
	</head>
	<body>
		@include('partials.menu')
		@yield('content')
		@include('partials.scripts')
	</body>
</html>