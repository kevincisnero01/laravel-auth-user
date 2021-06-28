@extends('layouts.app')
@section('content')
	
	<h1>Listado de usuarios</h1>
	<div class="panel panel-default">
		<div class="panel-body">
			<table class="table table-hover table-striped">
			<thead>
				<tr>
					<td>ID</td>
					<td>Nombre</td>
					<td>Correo</td>
					<td>Acciones</td>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td> 
						<form action="{{ route('admin.users.store') }}" method="POST">
							{{ csrf_field() }}
							<input type="hidden" name="user_id" value="{{ $user->id }}">
							<button  type="submit" class="btn btn-xs btn-info">
								<span class="glyphicon glyphicon-eye-open"></span> 
								Impersonar
						</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
			</table>
		</div>
	</div>

@endsection