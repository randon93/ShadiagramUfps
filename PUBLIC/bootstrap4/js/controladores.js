angular.module('instag')
  .controller("controlador", function($scope, $http) {
    $scope.namee = 'rene';
    $scope.newAlumno = {};
    $scope.listado = [];
    $http.get("MODELS/pruebaPhP.php")
      .then(function(response) {

        $scope.listado = response.data;

      });
  });
