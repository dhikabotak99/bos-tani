<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> HOME </title>

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
</head>

<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          <a class="nav-link" href="home">BOS TANI <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="home">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product">INPUT PRODUK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::to('/')}}/order">PENJUALAN</a>
        </li>    
        <li class="nav-item">
          <a class="nav-link" href="history">HISTORY</a>
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
      </ul>
   </div>
</nav>
</header>  

<div class="container position-relative my-5">
<h4 style="text-align: center;">ADMIN DASHBOARD</h4>
    <div class="row position-relative">
    @foreach ($products as $procat )     
    <div class="row row-cols-1 row-cols-md-2 g-4">
</div>   
      <div class="col-md-4">
          <a href="" class="text-dark">
          <div class="card border-0 my-2 card-blog position-relative">
            <img class="card-img-top" src="/images/sayur.jpg" alt="">
          </div>

          <div class="card-body">
              <h5 class="card-title poppins mb-1 font-weight-bold"><?= $procat['name'] ?></h5>
            </div>
            </a>
        </div> 
        @endforeach
    </div>
  </div>
  

</body>
</html>
