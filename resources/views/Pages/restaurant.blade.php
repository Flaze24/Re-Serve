@extends('dashlayout')

@section('contenido')

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-12">
			
			<div class="page-header table-responsive">
			 		<h1>Restaurants</h1>
			 	</div>
			 	<table class="table">
			 		<thead>
			 			<tr>
			 				<th>Name</th>
			 				<th>Description</th>
			 				<th>Email</th>
			 				<th>Phone</th>
			 				<th>Address</th>
			 				<th>Opens At</th>
			 				<th>Closes At</th>
			 				<th>Reserves Available</th>
			 				<th>Manager</th>
			 			</tr>
			 		</thead>
			 		<tbody>
			 			@foreach($restaurants as $restaurant)
			 			<tr>
			 				<td>{{ $restaurant->name }}</td>
			 				<td>{{ $restaurant->description }}</td>
			 				<td>{{ $restaurant->email}}</td>
			 				<td>{{$restaurant->phone}}</td>
			 				<td>{{ $restaurant->address }}</td>
			 				<td>{{ Carbon\Carbon::parse($restaurant->opening_time)->format('H:i') }}</td>
			 				<td>{{ Carbon\Carbon::parse($restaurant->closing_time)->format('H:i')}}</td>
			 				<td>{{ $restaurant->reserve_number}}</td>
			 				<td>{{ $restaurant->user->name}} {{$restaurant->user->lastname}}</td>
							
							<td>
			 					<a href="{{route('restaurant.create')}}" class="btn btn-primary">
			 						Create
			 					</a>
			 				</td>
			 				<td>
			 					<a href="{{route('restaurant.edit', $restaurant->id)}}" class="btn btn-info">
			 						Edit
			 					</a>
			 				</td>
			 				<td>
			 					<form action="{{ route('restaurant.destroy', $restaurant->id)}}" method="POST">
			 						{!! csrf_field()!!}
			 						{!! method_field('DELETE')!!}
			 						<button type="submit" class="btn btn-danger">Delete</button>
			 						
			 					</form>
			 				</td>
			 				<td>
			 					<a href="{{route('backreserve.index')}}" class="btn btn-primary">
			 						Reservations
			 					</a>
			 				</td>
			 			</tr>
			 			@endforeach
			 		</tbody>
			 	</table>
		</div>
	</div>
</div>

@stop