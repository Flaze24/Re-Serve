@extends('dashlayout')

@section('contenido')

<style type="text/css">
	.error{
		color:red;
	}
</style>


  <section class="reg_form" id="reg_form">
  	<div class="container">
  		<div class="row">
  			<div class="col-xs-12 col-md-12">
  				<h3>Access Your Account</h3>
			  <form action="{{route('user.update', $user->id)}}" method="post">
			  	
					<div class="form-group">
						{!! csrf_field() !!}
						{!! method_field('PUT') !!}
						{{Form::label('name', 'Name', ['class' => 'control-label'])}}
						{{Form::text('name', $user->name, ['class'=>'form-control', 'required'])}}

						{!! $errors->first('name', '<p class="error">:message</p>') !!}

						{{Form::label('lastname','Last Name', ['class' => 'control-label'])}}
						{{Form::text('lastname', $user->lastname, ['class'=>'form-control','required'])}}

						{!! $errors->first('lastname', '<p class="error">:message</p>') !!}

						{{Form::label('identification','Identification N.', ['class' => 'control-label'])}}
						{{Form::number('identification', $user->identification, ['class'=>'form-control','required'])}}

						{!! $errors->first('identification', '<p class="error">:message</p>') !!}

						{{Form::label('birthdate','Birth Date',['class'=>'control-label'])}}
						{{Form::date('birthdate', $user->birthdate, ['class'=>'form-control', 'required'])}}

						{!! $errors->first('birthdate', '<p class="error">:message</p>') !!}

						{{Form::label('email','Email', ['class'=>'control-label'])}}
						{{Form::email('email', $user->email, ['class'=>'form-control', 'required'])}}
						
						{!! $errors->first('email', '<p class="error">:message</p>') !!}


						{{Form::label('textarea','Address', ['class'=>'control-label'])}}
						{{Form::textarea('address', $user->address, ['class'=>'form-control', 'required'])}}

						{!! $errors->first('message', '<p class="error">:message</p>') !!}


					</div>

					<div class="form-group">
						{{Form::submit('Send', ['class'=>'form-control btn btn-primary'])}}
					</div>
			  </form>
					

				
  			</div>
  		</div>
  	</div>
  </section>

@stop