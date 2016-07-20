<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	{!! Html::style('bootstrap/css/bootstrap.css') !!}
</head>
<body ng-controller="myCtrl">
<label>nombre:</label>
  <input type="text"  ng-model="actual.nombre">
  <label>pais:</label>
  <input type="text"  ng-model="actual.pais">
  
  
  <button type="buttom"   ng-click="registrar()" >guardar</button>
  <button type="buttom"   ng-click="update(actual.id)" >modificar</button>
  <button type="buttom"   ng-click="actualizar()" >actualizar</button>

<table>
  <tr>
    <td>ID</td>
    <td>NOMBRE</td>
    <td>PAIS</td>
  </tr>
  <tr ng-repeat="post in posts">
    <td><h1>@{{ post.id }}</h1></td>
    <td><h1>@{{ post.nombre }}</h1></td>
    <td><h1>@{{ post.pais }}</h1></td>
     <td><button type="button"  ng-click="eliminar(post.id)">eliminar</button></td>
      <td><button type="button"  ng-click="store(post.id)">editar</button></td>
  </tr>
</table>


 
     {!! Html::script('bootstrap/js/jquery.min.js') !!}
	{!! Html::script('bootstrap/js/bootstrap.min.js') !!}
	 {!! Html::script('angular/js/angular.min.js') !!}
	  {!! Html::script('angular/scripts/http_controlador.js') !!}
</body>
</html>