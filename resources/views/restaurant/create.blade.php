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
  				<h3>Create a Restaurant</h3>
			  <form action="{{route('restaurant.store')}}" method="post">
			  	
					<div class="form-group">
						{!! csrf_field() !!}

						{{Form::label('name', 'Name', ['class' => 'control-label'])}}
						{{Form::text('name', '', ['class'=>'form-control', 'required'])}}

						{!! $errors->first('name', '<p class="error">:message</p>') !!}

						{{Form::label('description','Description', ['class' => 'control-label'])}}
						{{Form::textarea('description', '', ['class'=>'form-control','required'])}}

						{!! $errors->first('description', '<p class="error">:message</p>') !!}

						{{Form::label('email','Email', ['class' => 'control-label'])}}
						{{Form::email('email', '', ['class'=>'form-control','required'])}}

						{!! $errors->first('email', '<p class="error">:message</p>') !!}

						{{Form::label('phone','Phone N.',['class'=>'control-label'])}}
						{{Form::text('phone', '', ['class'=>'form-control', 'required'])}}

						{!! $errors->first('phone', '<p class="error">:message</p>') !!}

						{{Form::label('type','Type', ['class'=>'control-label'])}}
						{{Form::select('type', 
						['bar'=>'Bar', 
						'family'=>'Family',
						'dining'=>'Dining',
						'cafe'=>'Cafe',
						'gourmet'=>'Gourmet']
						, ['class'=>'form-control', 'required'])}}
						
						{!! $errors->first('type', '<p class="error">:message</p>') !!}
						<br>
						{{Form::label('clothing','Clothing', ['class'=>'control-label'])}}
						{{Form::select('type',['none'=>'None', 'casual'=>'Casual','formal'=>'Formal'], ['class'=>'form-control'])}}
						
						{!! $errors->first('clothing', '<p class="error">:message</p>') !!}
						<br>
						{{Form::label('chef_name', 'Chef Name', ['class' => 'control-label'])}}
						{{Form::text('chef_name', '', ['class'=>'form-control'])}}

						{!! $errors->first('chef_name', '<p class="error">:message</p>') !!}

						{{Form::label('address','Address', ['class'=>'control-label'])}}
						{{Form::textarea('address', '', ['class'=>'form-control', 'required'])}}

						{!! $errors->first('address', '<p class="error">:message</p>') !!}

						{{Form::label('dish_type','Dish Style', ['class'=>'control-label'])}}
						{{Form::select('type',['italian'=>'Italian', 'chinese'=>'Chinese','french'=>'French', 'latin_american'=>'Latin American', 'gourmet'=>'Gourmet', 'grill'=>'Grill','desserts'=>'Desserts','european'=>'European'], ['class'=>'form-control', 'required'])}}
						
						{!! $errors->first('dish_type', '<p class="error">:message</p>') !!}
						<br>
						{{Form::label('main_dish', 'Main Dish', ['class' => 'control-label'])}}
						{{Form::text('main_dish', '', ['class'=>'form-control'])}}

						{!! $errors->first('main_dish', '<p class="error">:message</p>') !!}

						{{Form::label('dish_description','Food Description', ['class'=>'control-label'])}}
						{{Form::textarea('dish_description', '', ['class'=>'form-control', 'required'])}}

						{!! $errors->first('dish_description', '<p class="error">:message</p>') !!}

						{{Form::label('opening_time', 'Opens At', ['class' => 'control-label'])}}
						{{Form::time('opening_time', '00:00:00', ['class'=>'form-control', 'required'])}}
						{!! $errors->first('opening_time', '<p class="error">:message</p>') !!}

						{{Form::label('closing_time', 'Closes At', ['class' => 'control-label'])}}
						{{Form::time('closing_time', '00:00:00', ['class'=>'form-control', 'required'])}}
						{!! $errors->first('closing_time', '<p class="error">:message</p>') !!}

						{{Form::label('reserve_number','Reserve Limit', ['class' => 'control-label'])}}
						{{Form::number('reserve_number', '', ['class'=>'form-control','required'])}}
						
						{!! $errors->first('reserve_number', '<p class="error">:message</p>') !!}

						{{Form::label('restaurant_photo','Restaurant Photo', ['class' => 'control-label'])}}
						{{Form::file('restaurant_photo')}}
						
						{!! $errors->first('restaurant_photo', '<p class="error">:message</p>') !!}

						{{Form::hidden('user_id', ''.auth()->user()->id)}}

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