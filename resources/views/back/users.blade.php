@extends('dashlayout')

@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-12">
			
			<div class="page-header table-responsive">
			 		<h1>Users</h1>
			 	</div>
			 	<table class="table">
			 		<thead>
			 			<tr>
			 				<th>Name</th>
			 				<th>Last Name</th>
			 				<th>Identification</th>
			 				<th>Birth Date</th>
			 				<th>Email</th>
			 				<th>Address</th>
			 				<th>Role</th>
			 			</tr>
			 		</thead>
			 		<tbody>
			 			@foreach($users as $user)
			 			<tr>
			 				<td>{{ $user->name }}</td>
			 				<td>{{ $user->lastname }}</td>
			 				<td>{{ $user->identification }}</td>
			 				<td>{{Carbon\Carbon::parse($user->birthdate)->format('d/m/Y')}}</td>
			 				<td>{{ $user->email }}</td>
			 				<td>{{ $user->address }}</td>
			 				<td>{{ $user->type_id}}</td>

			 				<td>
			 					<a href="{{route('backUserEdit', $user->id)}}" class="btn btn-info">
			 						Edit
			 					</a>
			 				</td>
			 				<td>
			 					<form action="{{ route('backUserDelete', $user->id)}}" method="POST">
			 						{!! csrf_field()!!}
			 						{!! method_field('DELETE')!!}
			 						<button type="submit" class="btn btn-danger">Delete</button>
			 						
			 					</form>
			 				</td>
			 			</tr>
			 			@endforeach
			 		</tbody>
			 	</table>
		</div>
	</div>
</div>

@stop