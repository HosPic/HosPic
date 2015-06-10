<!doctype html>
<html>
	<head>
		@include('partials.head')
		{{ HTML::style("css/login.css") }}
	</head>
	<body>

		{{ Form::open(array('url' => 'login','id'=>"loginForm")) }}
		<h1>Inloggen</h1>
		<div class="form-group">
			{{ Form::label('email', 'Email') }}
			{{ Form::text('email', Input::old('email'), array('placeholder' => 'jdoe@nmc.nl','class'=>'form-control')) }}
			@if($errors->has('email'))
				<div class="alert alert-warning">
				    {{ $errors->first('email') }}
			  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
			@endif
		</div>
		<div class="form-group">
			{{ Form::label('password', 'Wachtwoord') }}
			{{ Form::password('password',array('class'=>'form-control')) }}
			@if($errors->has('password'))
				<div class="alert alert-warning">
				    {{ $errors->first('password') }}
			  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
			@endif
		</div>
		@if(Session::has('message'))
		<div class="alert alert-danger">
			    {{ Session::get('message') }}
		  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
		@endif
		{{ Form::submit('Inloggen') }}
		{{ Form::close() }}
		@include('partials.scripts')
	</body>
</html>