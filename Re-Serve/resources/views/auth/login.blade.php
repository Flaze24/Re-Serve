@extends('layout')

@section('contenido')

<style type="text/css">
	.error{
		color:red;
	}
</style>

<div class="container-fluid">
		<div class="row text-center">
			<div class="col-xs-12 log_entrance text-center img-fluid">
					<h2 class="en-text">Access Your Account to make a Reserve Today</h2>
					<a href="#log_form" class="btn btn-secondary">Login</a>
			</div>
		</div>
  </div>

  <section class="log_form" id="log_form">
  	<div class="container">
  		<div class="row">
  			<div class="col-12 col-md-12">
  				<h3>Access Your Account</h3>
			  <form action="#" method="post">
			  	
					<div class="form-group">

						{{Form::label('email','Email', ['class'=>'control-label'])}}
						{{Form::email('email', '', ['class'=>'form-control', 'required'])}}

						{!! $errors->first('email', '<p class="error">:message</p>') !!}

						{{Form::label('password','Password', ['class'=>'control-label'])}}
						{{Form::password('password', ['class'=>'form-control', 'required'])}}

						{!! $errors->first('message', '<p class="error">:message</p>') !!}

					</div>

					<div class="form-group">
						{{Form::submit('Send', ['class'=>'form-control btn btn-primary'])}}
						{{link_to_route('register', "Register",[],['class'=>'form-control btn btn-info'])}}
					</div>
			  </form>
					

				
  			</div>
  		</div>
  	</div>
  </section>

@stop