@extends('layout')

@section('contenido')

<style type="text/css">
	.error{
		color:red;
	}
</style>

<div class="container-fluid">
		<div class="row text-center">
			<div class="col-xs-12 con_entrance text-center img-fluid">
					<h2 class="en-text">Always here to help</h2>
					<p>Have something to tell us? Leave a message down below</p>
					<a href="#" class="btn btn-secondary">Find a Restaurant</a>
			</div>
		</div>
  </div>

  <section class="con_form">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-3">
  				<p>
  					Address: Random Address
  					Phone Number: 0414-656-2056
  					<br>
  					Email: elleryjose72@gmail.com
  				</p>
  			</div>
  			<div class="col-md-9">
			  	{{Form::open(['route'=>'message.store', 'method'=>'post'])}}
					
					<div class="form-group">
						
						{{Form::label('name', 'Name', ['class' => 'control-label'])}}
						{{Form::text('name', '', ['class'=>'form-control', 'required'])}}

						{!! $errors->first('name', '<p class="error">:message</p>') !!}

						{{Form::label('lastname','Last Name', ['class' => 'control-label'])}}
						{{Form::text('lastname', '', ['class'=>'form-control','required'])}}

						{!! $errors->first('lastname', '<p class="error">:message</p>') !!}

						{{Form::label('email','Email', ['class'=>'control-label'])}}
						{{Form::email('email', '', ['class'=>'form-control', 'required'])}}

						{!! $errors->first('email', '<p class="error">:message</p>') !!}

						{{Form::label('textarea','Message', ['class'=>'control-label'])}}
						{{Form::textarea('message', '', ['class'=>'form-control', 'required'])}}

						{!! $errors->first('message', '<p class="error">:message</p>') !!}

					</div>

					<div class="form-group">
						{{Form::submit('Send', ['class'=>'form-control btn btn-primary'])}}
					</div>

				{{Form::close()}}
  			</div>
  		</div>
  	</div>
  </section>

@stop