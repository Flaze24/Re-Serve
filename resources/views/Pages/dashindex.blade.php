@extends('dashlayout');

@section('contenido')

<div class="container">
	<div class="row text-center">
		<div class="col-xs-12 col-md-12">
			<h3>Welcome {{$users->name}}</h3>
		</div>
	</div>
	<div class="row text-center">
		@if(auth()->user()->type_id==3)
		<div class="col-xs-4 col-md-4">
			<a href="{{route('user.index')}}" class="btn btn-primary">Users</a>
		</div>
		<div class="col-xs-4 col-md-4">
			<a href="{{route('message.index')}}" class="btn btn-primary">Message</a>
		</div>
		@endif
			@if(auth()->user()->type_id==2)
			<div class="col-xs-4 col-xs-offset-4 col-md-4 col-md-offset-4">
				<a href="{{route('restaurants')}}" class="btn btn-primary">Restaurants</a>
			</div>
			@elseif(auth()->user()->id==4)
			<div class="col-xs-4 col-md-4">
				<a href="{{route('restaurant.index')}}" class="btn btn-primary">Restaurants</a>
			</div>
			@endif
	</div>
</div>

@stop