@extends('dashlayout')

@section('contenido')

<div class="container">
	<div class="row text-center">
		<div class="col-xs-12 col-md-12">
			<h3>Welcome {{$user->name}}</h3>
		</div>
	</div>
	<div class="row text-center">
		<div class="col-xs-3 col-md-3">
			<a href="{{route('backUsers')}}" class="btn btn-primary">Users</a>
		</div>
		<div class="col-xs-3 col-md-3">
			<a href="{{route('message.index')}}" class="btn btn-primary">Message</a>
		</div>
		<div class="col-xs-3 col-md-3">
			<a href="{{route('backRestaurant')}}" class="btn btn-primary">Restaurants</a>
		</div>
		<div class="col-xs-3 col-md-3">
			<a href="{{route('backProfile')}}" class="btn btn-primary">Profile</a>
		</div>
	</div>
</div>

@stop