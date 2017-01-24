app.controller('SupplierController', function($scope, $http, API_URL) {
  // retrieve Supplier listing from API
  $http.get(API_URL + "request")
  .success(function(response){
    $scope.products = response;
  });
}
