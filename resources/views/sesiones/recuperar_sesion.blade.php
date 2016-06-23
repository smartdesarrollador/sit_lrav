<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


 <h1> pagina recuperar sesion</h1>
@if (Session::has('key'))
 <h1> el valor de la sesion es: {{ Session::get('key')}}</h1>
@else
 <h1> La sesion a sido eliminada - No se puede recuperar ningun valor</h1>
@endif
  <h1>{!! Html::link(url('sesion/crear'), 'crear sesion') !!}</h1>

  <h1>{!! Html::link(url('sesion/validar'), 'validar sesion') !!}</h1>

  <h1>{!! Html::link(url('sesion/eliminar'), 'eliminar sesion') !!}</h1>

  <h1>{!! Html::link(url('sesion/recuperar'), 'recuperar sesion') !!}</h1>

</body>
</html>