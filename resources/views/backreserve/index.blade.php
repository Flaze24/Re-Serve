@extends('dashlayout')

@section('contenido')
 	<div class="page-header">
 		<h1>Mensajes</h1>
 	</div>
 	<table class="table table-striped table-hover">
 		<thead>
 			<tr>
 				<th>Reserve Date</th>
 				<th>Reserve Time</th>
 				<th>Number of People</th>
 				<th>User</th>
 				<th>Restaurant</th>
 
 			</tr>
 		</thead>
 		<tbody>
 			@foreach($reserves as $reserve)
 			<tr>
 				<td>{{ Carbon\Carbon::parse($reserve->reserve_date)->format('d/m/Y') }}</td>
 				<td>{{ Carbon\Carbon::parse($reserve->reserve_time)->format('H:i') }}</td>
 				<td>{{ $reserve->guest_amount }}</td>
 				<td>{{ $reserve->user->name}}</td>
 				<td>{{ $reserve->restaurant->name}}</td>
 				<td>
 					<form action="{{ route('backreserve.destroy', $reserve->id)}}">
 						{!! csrf_field()!!}
 						{!! method_field('DELETE')!!}
 						<button type="submit" class="btn btn-danger">Delete</button>
 						
 					</form>
 				</td>
 			</tr>
 			@endforeach
 		</tbody>
 	</table>
 @stop