<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Inicio') | LoLSVGame</title>
		<link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Rancho" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/main.css')}}">

</head>
<body>
	<header>
		@include('front.partes.nav')
	</header>
	<br>
	<br>
	<section>
		@yield('contenido')
	</section>
	<br>
	@include('front.partes.footer')
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>