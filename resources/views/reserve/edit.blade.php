@extends('layout')

@section('contenido')

<div class="container restaurant">
			
			<div class="row">
				<div class="col-12 col-md-3 form-group">
				{{Form::open(['route'=>['reserve.update', $reserve->id], 'method'=>'put'])}}
					{{Form::label('reserve_date','Date',['class'=>'control-label'])}}
					{{Form::date('reserve_date', Carbon\Carbon::parse($reserve->reserve_date), ['class'=>'form-control', 'required'])}}
					{!! $errors->first('reserve_date', '<p class="error">:message</p>') !!}
				</div>
				<div class="col-12 col-md-3 form-group">
					
					{{Form::label('reserve_time', 'Time', ['class' => 'control-label'])}}
					{{Form::time('reserve_time', $reserve->reserve_time, ['class'=>'form-control', 'required'])}}
					{!! $errors->first('reserve_time', '<p class="error">:message</p>') !!}
				</div>
				
				<div class="col-12 col-md-3 form-group">
					
					{{Form::label('guest_amount','Number of People', ['class' => 'control-label'])}}
					{{Form::number('guest_amount', $reserve->guest_amount, ['class'=>'form-control','required'])}}
					
					{!! $errors->first('guest_amount', '<p class="error">:message</p>') !!}	
					@if(auth()->check())
					{{Form::hidden('user_id',''.auth()->user()->id)}}
					@endif
					{{Form::hidden('restaurant_id', ''.$reserve->restaurant->id)}}
				</div>
				<div class="col-12 col-md-3 form-group">
					
				<input type="submit" class="btn btn-primary form-control" value="Reserve" style="margin-top:30px;">
				{{Form::close()}}
				</div>
				
				</div>
			
			<div class="row res_entrance">
				<div class="col-12 text-center col-md-6">
					<div class="col-12 col-md-12 text-center">
						<h3>{{$reserve->restaurant->name}}</h3>
					<hr class="style-seven">
					</div>
					<p>{{$reserve->restaurant->description}}</p>
					<p><span>Address</span>: {{$reserve->restaurant->address}}</p>
				    <p><span>Cooking Style</span>: {{ucfirst($reserve->restaurant->dish_type)}}</p>
				    <p><span>Chef</span>: {{$reserve->restaurant->chef_name? $reserve->restaurant->chef_name : 'None'}}</p>
				    <p><span>Clothing Etiquette</span>: {{$reserve->restaurant->clothing? ucfirst($reserve->restaurant->clothing) : 'None'}}</p>
				    <br>
				   <div class="text-center">
				   		<h4>Recognized Dishes</h4>
				   		<p><span>{{$reserve->restaurant->main_dish}}</span></p>
				   		<p>{{$reserve->restaurant->dish_description}}</p>
				   </div>

				</div>
				<div class="col-12 text-center col-md-6">
					<img src="{{asset('img').'/'.$reserve->restaurant->restaurant_photo}}" alt="" style="" class="img-fluid">
					<p><span>{{$reserve->restaurant->email? $reserve->restaurant->email: 'None'}}</span></p>
					<p>{{$reserve->restaurant->phone}}</p>
					<p>{{Carbon\Carbon::parse($reserve->restaurant->opening_time)->format('H:i')}}-{{Carbon\Carbon::parse($reserve->restaurant->closing_time)->format('H:i')}}</p>
				</div>
			</div>
			
		
	</div>

@stop