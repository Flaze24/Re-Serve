@extends('dashlayout')

@section('contenido')
 	<div class="page-header">
 		<h1>Mensajes</h1>
 	</div>
 	<table class="table table-striped table-hover">
 		<thead>
 			<tr>
 				<th>Name</th>
 				<th>Last Name</th>
 				<th>Email</th>
 				<th>Message</th>
 
 			</tr>
 		</thead>
 		<tbody>
 			@foreach($messages as $message)
 			<tr>
 				<td>{{ $message->name }}</td>
 				<td>{{ $message->lastname }}</td>
 				<td>{{ $message->email }}</td>
 				<td>{{ $message->message }}</td>
 				<td>
 					<a href="{{route('message.edit', $message->id)}}" class="btn btn-info">
 						Edit
 					</a>
 				</td>
 				<td>
 					<form action="{{ route('message.destroy', $message->id)}}" method="POST">
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