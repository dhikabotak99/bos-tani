<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> DETAIL ORDER </title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel-rtl/">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

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
          <a class="nav-link" href="dashboard-admin">HOME <span class="sr-only">(current)</span></a>
        </li>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Products
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" href="/products">List Produk</a></li>
              <li><a class="dropdown-item" href="/history">History</a></li>
            </ul>
          </li>
        </ul>

        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Investasi
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" href="/investasis">List Investasi</a></li>
              <li><a class="dropdown-item" href="/historyOrderInvestasi">History</a></li>
            </ul>
          </li>
        </ul>
 
      </ul>
      </ul>
   </div>
   <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
        {{Auth::user()->name ?? ''}}
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="/logout">Logout</a></li>
    </ul>
  </div>
</nav>
</header>

<div class="container position-relative my-5">
    <div class="row position-relative">
    <div class="col-lg-5 col-12">
		<img src="{{URL::to('/')}}/img/1607199784.jpg" class="w-100 blog-img">
		<h1 class="poppins judul-blog" style="font-weight: bold;">{{$products->name}}</h1>
    <small>{{$products->description}}</small>
        <h5 class="card-title poppins mb-1 font-weight-bold">${{$products->price}}.00</h5>

        
        <form id="form" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" enctype="multipart/form-data" method="POST" action="{{url('order/save')}}">
             @csrf
              <div class="box-body">
              <div class="form-group">
                  <label for="product_id">Product Id</label>
                  <input type="number" class="form-control" id="product_id" name="product_id" readonly value= "{{$products->id}}" placeholder="Product Id">
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
