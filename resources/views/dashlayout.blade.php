<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>DASHBOARD</title>

	<link rel="stylesheet" href="{{asset('css/bootstrap_dash.min.css')}}" >
    <link rel="stylesheet" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
</head>
<body>

	<header>
		@include('nav_dash')
	</header>

	<main>
		@yield('contenido')
	</main>

	<footer>
		
	</footer>

<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>