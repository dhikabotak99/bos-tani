<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> DETAIL ORDER </title>
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

        <li class="nav-item">
          <a class="nav-link" href="product">PRODUCT</a>
        </li>

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


<div class="container position-relative my-5">
    <div class="row position-relative">
    <div class="col-lg-5 col-12">
		<img src="{{URL::to('/')}}/img/1607199784.jpg" class="w-100 blog-img">
		<h1 class="poppins judul-blog" style="font-weight: bold;">{{$product->name}}</h1>
    <small>{{$product->description}}</small>
        <h5 class="card-title poppins mb-1 font-weight-bold">${{$product->price}}.00</h5>

        
        <form id="form" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" enctype="multipart/form-data" method="POST" action="{{url('order/save')}}">
             @csrf
              <div class="box-body">
              <div class="form-group">
                  <label for="product_id">Product Id</label>
                  <input type="number" class="form-control" id="product_id" name="product_id" readonly value= "{{$product->id}}" placeholder="Product Id">
              </div>
                <div class="form-group">
                  <label for="buyer_name">Name</label>
                  <input type="text" class="form-control" id="buyer_name" name="buyer_name" placeholder="Name">
                </div>

                <div class="form-group">
                  <label for="buyer_contact">Contact</label>
                  <input type="number" class="form-control" name="buyer_contact" id="buyer_contact" placeholder="Contact">
                </div>

                <div class="form-group">
                  <label for="amount">Quantity</label>
                  <input type="number" class="form-control" id="amount" name="amount" placeholder="Quantity">
                </div>
              </div>
              
              <div class="box-footer">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </form>
  
    </div>
</div>
</body>
@include('layouts.js') 
</html>
