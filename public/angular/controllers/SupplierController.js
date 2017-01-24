app.controller('SupplierController', function($scope, $http, API_URL) {
  // retrieve Supplier listing from API
  $http.get(API_URL + "request")
  .success(function(response){
    $scope.products = response;

  });



$scope.toggle = function(modalstate, id){

$scope.modalstate = modalstate;

switch(modalstate){

case 'add':


$scope.form_title = "Create Item";


break;

case 'edit':



$scope.form_title = "Edit Item";
$scope.id = id;



$http.get(API_URL + 'request/' + id).success(function(response){

console.log(response);

$scope.testdata = "test";
$scope.product = response;

});

break;

default:

break;


}

console.log(id);

$('#myModal').modal('show');




  }




$scope.save = function (modalstate, id){

var url = API_URL + "request";



if(modalstate === 'edit'){


url += "/" + id;

}

$http({

method: 'POST',
url: url,
data: $.param($scope.product),
headers: {'Content-Type': 'application/x-www-form-urlencoded'}

}).success(function(response){



console.log(response);

location.reload();





}).error(function(response){

console.log(response);

alert('error sorry');

});





}


$scope.confirmDelete = function(id){

var isconfirmDelete = confirm('are you sure you want to delete this data?');

if(isconfirmDelete)

  $http({



method: 'DELETE',
url: API_URL + 'request/' + id



  }).success(function(response){

console.log(response);

location.reload();


  }).error(function(response){

console.log(response);

alert('error sorry');

  });



}



});
