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
				<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
					<label for="email">Email</label>
					<input class="form-control"
						type="email" 
						name="email" 
						placeholder="Ingresa tu email"
						value="{{ old('email') }}" 
						required>
					{!! $errors->first('email',"<span class='help-block'>:message</span>") !!}
				</div>

				<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">	
					<label for="email">Password</label>
					<input class="form-control"
						type="password" 
						name="password" 
						placeholder="Ingresa tu password"
						required>
					{!! $errors->first('password',"<span class='help-block'>:message</span>") !!}
				</div>

				<button class="btn btn-primary btn-block" type="submit">Acceder</button>
			</form>

			</div><!--panel-body-->
		</div><!--panel-->
	</div><!--col-->
</div><!--row-->
@endsection