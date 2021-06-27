@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<p class="alert alert-success">Welcome {{ auth()->user()->nem }}</p>
	</div>
</div>
@endsection()