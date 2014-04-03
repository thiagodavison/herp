@extends('layout')

{{ HTML::style('css/signin.css') }}

@section('content')

	<div class="container">
	
		@if(Session::has('errors'))
			<div class="alert alert-danger">
				<p>{{$errors->first('name')}}</p>
			</div>
		@endif
	
	    {{ Form::open(array('url' => 'register/check', 'class'=>'form-signin', 'role'=>'form')) }}

	    	
			{{ Form::email('email', '', array('class'=>'form-control', 'placeholder'=>Lang::get('messages.email')))}}
			
	    	{{ Form::text('name', '', array('class'=>'form-control', 'placeholder'=>Lang::get('messages.name')))}}

			{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>Lang::get('messages.password'))) }}

			{{ Form::password('password_check', array('class'=>'form-control', 'placeholder'=>Lang::get('messages.password_check'))) }}
			
			{{ Form::submit(Lang::get('messages.register'), array('class'=>'btn btn-lg btn-primary btn-block')) }}

		{{ Form::close() }}

	</div>

	<div class="footer"> 
		<a href="./" class="btn btn-primary"> {{Lang::get('messages.submit')}} </a>
	</div>

@stop

