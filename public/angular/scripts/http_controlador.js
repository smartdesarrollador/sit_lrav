var app = angular.module('myApp',[]);

app.controller('myCtrl',function($scope,$http){

	 $scope.actual = {};
	 $scope.actuales = [];
	 $scope.valor = "hola";

$http.get('http://localhost/sitio/public/angular/http').success(function(data){
              $scope.posts=data;
         });

 $scope.actualizar = function(){
        	$http.get('http://localhost/sitio/public/angular/http').success(function(data){
              $scope.posts=data;
         });
        }


$scope.registrar = function(){
				var url = "http://localhost/sitio/public/angular/crear";
					$http.post(url,{'nombre':$scope.actual.nombre, 'pais':$scope.actual.pais}).success(function(data, status, headers, config)
					{
					  console.log(data);
					});

		}	

		$scope.eliminar = function(id)
	{
		var url = "http://localhost/sitio/public/angular/eliminar/" + id;
		$http.post(url).success(function(data, status, headers, config)
		{
			console.log(data);
			
		});
	}

	$scope.store = function(id)
	{
		var url = "http://localhost/sitio/public/angular/mostrar/" + id;
		$http.post(url).success(function(data, status, headers, config)
		{
			

			$scope.actuales=data;



			$scope.actual.id = $scope.actuales[0].id;
			$scope.actual.nombre = $scope.actuales[0].nombre;
			$scope.actual.pais = $scope.actuales[0].pais;
			


		});
	}

	$scope.update = function(id)
	{
		var url = "http://localhost/sitio/public/angular/actualizar/"+id;
		$http.post(url,{ 'nombre':$scope.actual.nombre, 'pais':$scope.actual.pais}).success(function(data, status, headers, config)
		{
			
		});
	}				



	
});