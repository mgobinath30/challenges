var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
  $http.get("https://hackerearth.0x10.info/api/fashion?type=json&query=list_products").then(function (response) {
      $scope.myWelcome = response.data;
      console.log($scope.myWelcome);
  });
});
