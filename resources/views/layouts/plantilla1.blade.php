<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel</title>
</head>
<body>
<h1>cabecera</h1>

<a href="{{ url('user/2') }}">usuario</a>
<a href="{{ url('home') }}">inicio</a><br><br>


@yield('contenido')

<h1>pie de pagina</h1>
</body>
</html>