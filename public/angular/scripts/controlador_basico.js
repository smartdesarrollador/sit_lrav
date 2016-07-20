var app = angular.module('myApp',[]);

app.controller('myCtrl',function($scope){
	 $scope.a = 0;
     $scope.b = 0;
	$scope.suma = function(){
		$scope.a = $scope.a;
		$scope.b = $scope.b;

		$scope.c = $scope.a + $scope.b;
	}
});