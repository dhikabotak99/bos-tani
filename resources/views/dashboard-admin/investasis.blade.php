<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> INVESTASI </title>
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
        </ul> 
      </ul>
      </ul>
   </div>
</nav>
</header>

<div class="container position-relative my-5">
    <div class="row position-relative">

<section class="content">
      <div class="row">
        <div class="col-xs-2">
          <div class="box">
          <h4 style="text-align: center;">LIST INVESTASI</h4>
          <h6 style="text-align: Left;"> Silahkan Masukkan investasi Yang Ingin Kamu Jual: </h6>
            <a href="add-investasi" class="btn btn-#2F4F4F btn-sm"><button type="button" class="btn btn-primary">Tambah Investasi</button></a>
            <br />
            <br>

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="background-color:#2F4F4F;color:#fff;">No</th>
                  <th style="background-color:#2F4F4F;color:#fff;" width="300px">Nama</th>
                  <th style="background-color:#2F4F4F;color:#fff;">Harga</th>
                  <th style="background-color:#2F4F4F;color:#fff;">Unit Terisa</th>
                  <th style="background-color:#2F4F4F;color:#fff;">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  $no = 1;
                 ?>
                @foreach($investasi as $p )
               
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$p->Nama}}</td>
                  <td>Rp{{$p->Harga}}.00</td>
                  <td>{{$p->Unit_Tersisa}}</td>
                  <td style="text-align: center;">
                    <a class='btn btn-info btn-xs' href="{{url('update-investasi')}}/{{$p->id}}" class=""> Edit<i class="glyphicon glyphicon-edit"></i> </a> &nbsp;&nbsp;
                    <a class='btn btn-danger btn-xs' href="{{url('deleteInvestasi')}}/{{$p->id}}" class=""> Delete<i class="glyphicon glyphicon-edit"></i> </a> 
                  </td>
                </tr>    
                @endforeach
                </tbody>
              </table>
            </div>
    
          </div>
          
        </div>
     
      </div>
   
    </section>
 
    </div>
  </div>
</body>
@include('layouts.js') 
</html>
