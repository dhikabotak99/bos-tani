<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Barang Penjualan </title>
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
<h4 style="text-align: center;">PENJUALAN</h4>
    <div class="row position-relative">
    @foreach ($products as $procat )         
      <div class="col-md-4">
          <a href="" class="text-dark">
          <div class="card border-0 my-2 card-blog position-relative">
            <img class="card-img-top" src="<?= env('app_link') ?>img/<?= $procat['img_path'] ?>" alt="">
          </div>
          <div class="card-body">
              <h5 class="card-title poppins mb-1 font-weight-bold">{{$procat->name}}</h5>
              <small>{{$procat->description}}</small>
              <h5 class="card-title poppins mb-1 font-weight-bold">${{$procat->price}}.00</h5>
              <a class='btn btn-success btn-xs' href="{{url('product/order')}}/{{$procat->id}}" class=""> Order Now<i class="glyphicon glyphicon-edit"></i> </a>
            </div>
            </a>
        </div> 
        @endforeach
    </div>
  </div>
  

</body>
@include('layouts.js') 
</html>
