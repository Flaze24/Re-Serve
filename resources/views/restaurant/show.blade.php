@extends('layout')

@section('contenido')

<div>
	<div class="container restaurant">
		<div class="row">
			<div class="col-12 col-md-12">
				<img src="{{asset('img').'/'.$restaurants->restaurant_photo}}" alt="" style="" class="img-fluid">

			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-12">
				<div class="rest_container">
					<h3>{{$restaurants->name}}</h3>
					<div class="col-12 col-md-6">
						
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>

@stop