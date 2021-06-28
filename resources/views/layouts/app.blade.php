<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Custom Login</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>
<body>
	@include('layouts.nav')

	@if(session()->has('flash'))
		<div class="alert alert-info alert-custom">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			{{ session('flash') }}
		</div>
	@endif

	<div class="container-fluid">
	@yield('content')
	</div><!--container-->
<script type="text/javascript" src="{{ asset('plugins/jquery/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>