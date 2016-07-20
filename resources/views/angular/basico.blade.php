<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	{!! Html::style('bootstrap/css/bootstrap.css') !!}
</head>
<body ng-controller="myCtrl">
<input type="number" ng-model="a">
<input type="number" ng-model="b">
<button type="button" ng-click="suma()">sumar</button>

  <h1>@{{c}}</h1>

     {!! Html::script('bootstrap/js/jquery.min.js') !!}
	{!! Html::script('bootstrap/js/bootstrap.min.js') !!}
	 {!! Html::script('angular/js/angular.min.js') !!}
	  {!! Html::script('angular/scripts/controlador_basico.js') !!}
</body>
</html>