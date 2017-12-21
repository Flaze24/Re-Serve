@extends('dashlayout')

@section('contenido')

<style type="text/css">
	.error{
		color:red;
	}
</style>

<div class="container-fluid">
		<div class="row text-center">
			<div class="col-xs-12">
					<h2 class="en-text">Messages</h2>
					
			</div>
		</div>
  </div>

  <section class="con_form" id="con_form">
  	<div class="container">
  		<div class="row">
  			<div class="col-xs-12">
			  	{{Form::open(['route'=>['message.update', $message->id], 'method'=>'put'])}}
					
					<div class="form-group">

						{{Form::label('name', 'Name', ['class' => 'control-label'])}}
						{{Form::text('name', $message->name, ['class'=>'form-control', 'required'])}}

						{!! $errors->first('name', '<p class="error">:message</p>') !!}

						{{Form::label('lastname','Last Name', ['class' => 'control-label'])}}
						{{Form::text('lastname', $message->lastname, ['class'=>'form-control','required'])}}

						{!! $errors->first('lastname', '<p class="error">:message</p>') !!}

						{{Form::label('email','Email', ['class'=>'control-label'])}}
						{{Form::email('email', $message->email, ['class'=>'form-control', 'required'])}}

						{!! $errors->first('email', '<p class="error">:message</p>') !!}

						{{Form::label('textarea','Message', ['class'=>'control-label'])}}
						{{Form::textarea('message', $message->message, ['class'=>'form-control', 'required'])}}

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