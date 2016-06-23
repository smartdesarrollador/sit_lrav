<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
 @if (Session::has('key'))

  
    <h1>sesion activa</h1>

@else
   <h1>sesion inactiva</h1>
@endif

 <h1> pagina validar sesion</h1>
	
  <h1>{!! Html::link(url('sesion/crear'), 'crear sesion') !!}</h1>

  <h1>{!! Html::link(url('sesion/validar'), 'validar sesion') !!}</h1>

  <h1>{!! Html::link(url('sesion/eliminar'), 'eliminar sesion') !!}</h1>

  <h1>{!! Html::link(url('sesion/recuperar'), 'recuperar sesion') !!}</h1>

</body>
</html>

 

 