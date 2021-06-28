@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-12">

		<div class="alert alert-success alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Welcome!</strong> {{ auth()->user()->name }} to the Dashboard.
		</div>
		
	</div>
</div>
@endsection()