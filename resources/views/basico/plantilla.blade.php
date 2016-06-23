<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	{!! Html::style('bootstrap/css/bootstrap.css') !!}
  {!! Html::style('bootstrap/css/bootstrap-theme-cosmo.min.css') !!}

   {!!Html::style('bootstrap/css/metisMenu.min.css')!!}
    {!!Html::style('bootstrap/css/sb-admin-2.css')!!}
    {!!Html::style('bootstrap/css/font-awesome.min.css')!!}
  

  <style type="text/css">



  </style>
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://localhost/sitio/public/basico">INICIO</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Formulario <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://localhost/sitio/public/basico/formulario">Formulario basico</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="http://localhost/sitio/public/basico/estructura_basica_bootstrap">Estructura basica bootstrap</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

	@yield('content')



	<!-- Scripts -->
	{!! Html::script('bootstrap/js/jquery.min.js') !!}

  

	
  <!-- {!!Html::script('bootstrap/js/script.js')!!} -->

   {!! Html::script('bootstrap/js/bootstrap.min.js') !!}
    {!!Html::script('bootstrap/js/metisMenu.min.js')!!}
    {!!Html::script('bootstrap/js/sb-admin-2.js')!!}

@section('scripts')

    @show 

	
</body>
</html>