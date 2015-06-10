<!doctype html>
<html>
	<head>
		<title>HosPic | Login</title>
	</head>
<body>

{{ Form::open(array('url' => 'login')) }}
<h1>Login</h1>
<p>
    {{ Form::label('email', 'Email') }}
    {{ Form::text('email', Input::old('email'), array('placeholder' => 'email adress')) }}
    {{ $errors->first('email') }}
</p>
<p>
    {{ Form::label('password', 'Wachtwoord') }}
    {{ Form::password('password') }}
    {{ $errors->first('password') }}
</p>

@if(Session::has('message'))
<p>{{Session::get('message')}}</p>
@endif

<p>{{ Form::submit('Inloggen') }}</p>
{{ Form::close() }}
</body>
</html>