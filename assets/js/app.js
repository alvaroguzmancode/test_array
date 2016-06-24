var app=angular.module('app',[])
.controller('controlador',['$scope','$http',function($scope,$http){
	$scope.enviar=function(){
		$http.post('php/get_array.php',$scope.arreglo).then(function(response){
			console.log(response.data);
		});
	}
}]);