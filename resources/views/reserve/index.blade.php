@extends('layout')

@section('contenido')
<br><br>
<div class="container">
	<div class="row text-center">
		<div class="col-12">
			<h3>Reservations</h3>
			<hr class="style-seven">
		</div>
			@foreach($reserves as $reserve)

		<div class="col-6 col-md-4">
			<div class="card">
			  <img class="card-img-top" src="{{asset('img').'/'.$reserve->restaurant->restaurant_photo}}" alt="Card image cap">
			  <div class="card-block pl-2">
			  	<h4 class="card-title mt-2">{{$reserve->restaurant->name}}</h4>
			    <p class="card-text">{{Carbon\Carbon::parse($reserve->reserve_date)->format('d/m/Y')}}-{{Carbon\Carbon::parse($reserve->reserve_time)->format('H:i')}}-{{$reserve->guest_amount}} Guests</p>
			    
				    <a href="{{route('reserve.edit', $reserve->id)}}" class="btn btn-primary">Edit</a>
			    		
				    {{Form::open(['route'=>['reserve.destroy', $reserve->id], 'method'=>'delete','class'=>'pt-2'])}}
	 						<button type="submit" class="btn btn-primary" id="cancelRe">Cancel</button>
	 				{{Form::close()}}
			    		
			    	
			  </div>
			</div>
		</div>

			@endforeach
	</div>
</div>

@stop