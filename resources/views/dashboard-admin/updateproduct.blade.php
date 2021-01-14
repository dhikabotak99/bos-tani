<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UPDATE PRODUCT </title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel-rtl/">

  <style>
      body {
          background-color: rgb(217, 217, 211);
      }
      #barang {
          background-color: white;
      }
  </style>
  @include('layouts.css')
</head>

<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item">
          <a class="nav-link" href="home">HOME <span class="sr-only">(current)</span></a>
        </li>

        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            Products
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">List Products</a></li>
            <li><a class="dropdown-item" href="#">History</a></li>
          </ul>
        </div>

        <li class="nav-item active">
          <a class="nav-link" href="order">ORDER</a>
        </li>
            
        <li class="nav-item">
          <a class="nav-link" href="history">HISTORY</a>
        </li>
        
      </ul>
   </div>
</nav>
</header>

<div class="container position-relative my-2">
    <div class="row position-relative">
  
    <div class="box box-primary">
            <div class="box-header with-border">
            <h4 style="text-align: center;">Update Product</h4>
            </div>
            
          
            <form id="form" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" enctype="multipart/form-data" method="POST" 
            action="{{url('updateproduct', $products->id)}}">
             @csrf

              <div class="box-body">
                <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$products->name}}" placeholder="Product Name">
                </div>

                <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price" id="price" value="{{$products->price}}" placeholder="Price">
                </div>

                <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="3" name="description" placeholder="Description">{{$products->description}}</textarea>
                </div>

                <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" value="{{$products->stock}}" placeholder="Stock">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Image File Input</label>
                  <div class="col-md-6 col-sm-6 ">
                  <input type="file" name="img_path" id="img_path" onchange="fileSelected();"/>
                  </div>
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-dark">Submit</button>
              </div>
            </form>
           
          </div>

    </div>
  </div>
</body>
@include('layouts.js') 
</html>
