@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				Acceso a la Aplicación
			</div>
			<div class="panel-body">
			
			<form  method="POST" action="{{route('login')}}">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="email">Email</label>
					<input class="form-control"
						type="email" 
						name="email" 
					placeholder="Ingresa tu email">
				</div>
				<div class="form-group">	
					<label for="email">Password</label>
					<input class="form-control"
						type="password" 
						name="password" 
						placeholder="Ingresa tu password">
				</div>
				<button class="btn btn-primary btn-block" type="submit">Acceder</button>
			</form>

			</div><!--panel-body-->
		</div><!--panel-->
	</div><!--col-->
</div><!--row-->
@endsection