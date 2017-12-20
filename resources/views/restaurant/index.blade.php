@extends('layout')

@section('contenido')

	  <div class="container-fluid">
			<div class="row text-center">
				<div class="col-xs-12 res_entrance text-center img-fluid">
						<h2 class="en-text">Get the best table around</h2>
						<p>We provide you with the <span>best</span> dining experience possible</p>
						
				</div>
			</div>
	  </div>

	  <section class="restaurants" id="restaurant_sec">
		  <div class="container-fluid">
		  		<div class="row text-center">
		  			<div class="col-xs-6 col-xs-offset-3 col-md-12">
		  				<p>Restaurants</p>
					  	<hr class="style-seven">
		  			</div>
		  		</div>
		  		<div class="row">
		  			@foreach($restaurants as $restaurant)
		  			<div class="col-12 col-sm-6 col-md-4 res_index text-center">
		  				<img src="{{asset('img').'/'.$restaurant->restaurant_photo}}" alt="">
		  				<h4>{{$restaurant->name}}</h4>
		  				<p>{{ucfirst($restaurant->dish_type)}}</p>
		  				@if(auth()->check())
		  				<a href="{{route('restaurant.show', $restaurant->id, $users->id)}}" class="btn btn-primary">Reserve</a>
		  				@else
		  				<a href="{{route('login')}}" class="btn btn-primary">Log in to Reserve</a>
		  				@endif
		  			</div>
		  			@endforeach
		  		</div>
		  </div>
	  </section>

@stop