<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Re:Serve</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<header id="header">
	@include("navbar");
	</header>
	<main>
	@yield("contenido")
	</main>

	<footer>
	@include("footer");
	</footer>

	<script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.js')}}"></script>
	<script src="{{asset('js/script.js')}}"></script>
</body>
</html>