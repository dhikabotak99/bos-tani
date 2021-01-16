<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> ADD Investasi </title>
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
              <li><a class="dropdown-item" href="/history">History</a></li>
            </ul>
          </li>
        </ul>

        <li class="nav-item">
          <a class="nav-link" href="order">Penjualan</a>
        </li>    
      </ul>
      </ul>
   </div>
</nav>
</header>

<div class="container position-relative my-2">
    <div class="row position-relative">
    
    <div class="box box-primary">
            <div class="box-header with-border">
            <h4 style="text-align: center;">INPUT INVESTASI</h4>
            </div>
           
            <form id="form" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" enctype="multipart/form-data" method="POST" action="/post-add-investasi">
             @csrf
              <div class="box-body">
                <div class="form-group">
                <label for="name">Nama Investasi</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Product Name">
                </div>

                <div class="form-group">
                <label for="price">Harga</label>
                <input type="number" class="form-control" name="price" id="price" placeholder="Price">
                </div>

                <div class="form-group">
                <label for="asal">Periode kontrak</label>
                <input type="text" class="form-control" name="kontrak" id="asal" placeholder="kontrak">
                </div>

                <div class="form-group">
                <label for="asal">Hasil</label>
                <input type="text" class="form-control" name="hasil" id="asal" placeholder="hasil">
                </div>

                <div class="form-group">
                <label for="asal">Bagi Hasil</label>
                <input type="text" class="form-control" name="bagi" id="asal" placeholder="pembagian">
                </div>

                <div class="form-group">
                <label for="stock">unit tersisa</label>
                <input type="number" class="form-control" id="unit" name="unit" placeholder="unit">
                </div>

                <div class="form-group">
                  <label for="image-input">Masukan Gambar</label>
                  <input type="file" class="form-control-file" name="image">
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
