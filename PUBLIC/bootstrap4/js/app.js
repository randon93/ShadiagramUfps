angular.module('instag', [])
.controller("controlador", function($scope, $http) {
  $scope.listado = [];
  $http.get("MODELS/cargaImg.php")
    .then(function(response) {
      console.log(response.data);
      $scope.listado = response.data
    })

});
