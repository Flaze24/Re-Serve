@extends('layout')

@section('contenido')


	<div class="container restaurant">
				
				<div class="row">
					<div class="col-12 col-md-3 form-group">
					{{Form::open(['route'=>'reserve.store', 'method'=>'post'])}}
						{{Form::label('reserve_date','Date',['class'=>'control-label'])}}
						{{Form::date('reserve_date', 'dd/mm/yy', ['class'=>'form-control', 'required'])}}
						{!! $errors->first('reserve_date', '<p class="error">:message</p>') !!}
					</div>
					<div class="col-12 col-md-3 form-group">
						
						{{Form::label('reserve_time', 'Time', ['class' => 'control-label'])}}
						{{Form::time('reserve_time', '00:00:00', ['class'=>'form-control', 'required'])}}
						{!! $errors->first('reserve_time', '<p class="error">:message</p>') !!}
					</div>
					
					<div class="col-12 col-md-3 form-group">
						
						{{Form::label('guest_amount','Number of People', ['class' => 'control-label'])}}
						{{Form::number('guest_amount', '', ['class'=>'form-control','required'])}}
						
						{!! $errors->first('guest_amount', '<p class="error">:message</p>') !!}	
						@if(auth()->check())
						{{Form::hidden('user_id', ''.auth()->user()->id)}}
						@endif
						{{Form::hidden('restaurant_id', ''.$restaurants->id)}}
					</div>
					<div class="col-12 col-md-3 form-group">
						
					<input type="submit" class="btn btn-primary form-control" value="Reserve" style="margin-top:30px;">
					{{Form::close()}}
					</div>
					
					</div>
				
				<div class="row res_entrance">
					<div class="col-12 text-center col-md-6">
						<div class="col-12 col-md-12 text-center">
							<h3>{{$restaurants->name}}</h3>
						<hr class="style-seven">
						</div>
						<p>{{$restaurants->description}}</p>
						<p><span>Address</span>: {{$restaurants->address}}</p>
					    <p><span>Cooking Style</span>: {{ucfirst($restaurants->dish_type)}}</p>
					    <p><span>Chef</span>: {{$restaurants->chef_name? $restaurants->chef_name: 'None'}}</p>
					    <p><span>Clothing Etiquette</span>: {{$restaurants->clothing? ucfirst($restaurants->clothing): 'None'}}</p>
					    <br>
					   <div class="text-center">
					   		<h4>Recognized Dishes</h4>
					   		<p><span>{{$restaurants->main_dish}}</span></p>
					   		<p>{{$restaurants->dish_description}}</p>
					   </div>

					</div>
					<div class="col-12 text-center col-md-6">
						<img src="{{asset('img').'/'.$restaurants->restaurant_photo}}" alt="" style="" class="img-fluid">
						<p><span>{{$restaurants->email? $restaurants->email: 'None'}}</span></p>
						<p>{{$restaurants->phone}}</p>
						<p>{{Carbon\Carbon::parse($restaurants->opening_time)->format('H:i')}}-{{Carbon\Carbon::parse($restaurants->closing_time)->format('H:i')}}</p>
					</div>
				</div>
				
			
		</div>
	


@stop