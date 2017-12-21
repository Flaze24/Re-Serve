@extends('layout')

@section('contenido')

  <div class="container-fluid">
		<div class="row text-center">
			<div class="col-xs-12 entrance text-center img-fluid">
					<h2 class="en-text">Get the best table around</h2>
					<p>We provide you with the <span>best</span> dining experience possible</p>
					<a href="{{route('restaurant.index')}}" class="btn btn-secondary">Find a Restaurant</a>
			</div>
		</div>
  </div>
	  <section class="restaurants" id="restaurants_sec">
		  <div class="container-fluid">
		  		<div class="row text-center">
		  			<div class="col-xs-6 col-xs-offset-3 col-md-12">
		  				<p>Delight Yourself with these Restaurants</p>
					  	<hr class="style-seven">
		  			</div>
		  		</div>
		  		<div class="row">
		  			@foreach($restaurants as $restaurant)
		  			<div class="col-12 col-sm-6 col-md-4 res_index text-center">
		  				<img src="{{asset('img').'/'.$restaurant->restaurant_photo}}" alt="">
		  				<h4>{{$restaurant->name}}</h4>
		  				<p>{{$restaurant->dish_type}}</p>
		  				<a href="{{route('restaurant.show', ['id'=> $restaurant->id])}}" class="btn btn-primary">Reserve</a>
		  				
		  			</div>
		  			@endforeach
		  		</div>
		  </div>
	  </section>

	  <section class="about" id="about_sec">
	  	<div class="container">
	  		<div class="row text-center">
	  			<div class="col-12 col-md-12">
	  				<h3>We Bring You an Unforgettable Experience</h3>
	  				<p>
	  					We're more than just a pretty site. Learn more about us and what we
	  					have to offer.
	  				</p>
	  				<a href="#" class="btn btn-primary">About Us</a>
	  			</div>
	  		</div>
	  	</div>
	  </section>

	  <section class="contact" id="contact_sec">
	  	<div class="container">
	  		<div class="row text-center">
		  		<div class="col-12 col-md-12">
		  			<h3>Talk to Us!</h3>
		  			<p>
		  				Have something you want to say? We're always willing to lend an ear
		  			</p>
		  			<a href="#" class="btn btn-outline-primary">Contact us</a>
		  		</div>
	  		</div>
	  	</div>
	  </section>

	  <section class="sponsors">
	  	<div class="container">
	  		<div class="row text-center">
	  			<div class="col-12 col-md-4">
	  				<img src="{{asset('img/logo1.png')}}" alt="">

	  			</div>
	  			<div class="col-12 col-md-4">
	  				<img src="{{asset('img/logo5.png')}}" alt="">

	  			</div>
	  			<div class="col-12 col-md-4">
	  				<img src="{{asset('img/logo6.png')}}" alt="">

	  			</div>
	  		</div>
	  	</div>
	  </section>
		
	
		   <div class="container-fluid">
				<div class="row text-center">
					<div class="col-xs-12 exit text-center img-fluid">
							<h2 class="en-text">Don't be Shy</h2>
							<p>Get the best dining experience that you deserve</p>
							<a href="#" class="btn btn-secondary">Find a Restaurant</a>
					</div>
				</div>
	  		</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

@stop