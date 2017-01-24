<!DOCTYPE html>
<html lang="en" ng-app="testmodule">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 5 and Angular CRUD Application</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<link rel = "stylesheet" href="styles/style.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>



<div class = "container">
  <h2>Product Inventory</h2>
  <div ng-controller="SupplierController">

<div class="row">

<table class  = "table table-striped">

<tr>

  <th>ProductID</th>
  <th>ProductName</th>
  <th>ProductPrice</th>
  <th>ProductQuantity</th>
  <th>Date Created</th>
<th>Date Updated</th>





  <th>

  <button class="btn btn-primary btn-xs" ng-click="toggle('add', 0)">Add Product</button>

</th>


</tr>

<tr ng-repeat = "product in products">

<td>@{{product.id }}</td>
<td>@{{product.name}}</td>
<td>@{{product.price}}</td>
<td>@{{product.quantity}}</td>
<td>@{{product.created_at}}</td>
<td>@{{product.updated_at}}</td>



<td>

<button class = "btn btn-warning  btn-detail btn-xs" ng-click="toggle('edit', product.id)">
  <span class = "glyphicon glyphicon-edit"></button>



    <button class = "btn btn-danger btn-delete btn-xs" ng-click="confirmDelete(product.id)">
      <span class = "glyphicon glyphicon-trash"></button>



</td>
</td>
</tr>
</table>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">@{{form_title}}</h4>
      </div>
      <div class="modal-body">

<form name = "frmtest" class = "form-horizontal" novalidate="">

  <div class="form-group">

    <label name = "name">Product Name:</label>

    <input type="text"  name="name" class = "form-control" placeholder="Input Product Name here" ng-model=" product.name"  ng-required="true">
    <span ng-show = "frmtest.Name.$invalid && frmtest.Name.$touched">Name required</span>

  </div>




  <div class="form-group">

    <label name = "price">Product Price:</label>

    <input type="text"  name="price" class = "form-control" placeholder="Input Product Price here" ng-model=" product.price"  ng-required="true">
    <span ng-show = "frmtest.Price.$invalid && frmtest.Price.$touched">Product Price required</span>

  </div>



  <div class="form-group">

    <label name = "quantity">Product Quantity:</label>

    <input type="text"  name="quantity" class = "form-control" placeholder="Input Product Quantity here" ng-model=" product.quantity"  ng-required="true">
    <span ng-show = "frmtest.Quantity.$invalid && frmtest.Quantity.$touched">Product Price required</span>

  </div>







      </div>
      <div class="modal-footer">
                <button type="button" class="btn btn-primary"  ng-click="save(modalstate, id)" ng-disabled="frmtest.$invalid">Save Changes</button>
      </div>
    </form>
    </div>

  </div>
</div>


</div>
</div>
</div>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <!-- Aangular Material load from CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.1/angular-material.min.js"></script>

    <!-- Angular Application Scripts Load  -->
    <script src="{{ asset('angular/app.js') }}"></script>
    <script src="{{ asset('angular/controllers/SupplierController.js') }}"></script>


</body>

</html>
