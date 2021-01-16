<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> History Pembelian </title>
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
</head>

    <body>
        <!-- NAVBAR -->
        <header>
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <img src="/images/logo_bostani.png" class="navbar-brand" height="50px">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/product">Produk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/investasi">Investasi</a>
                            </li>
                        </ul>
                    </div>
                    @if(Auth::guest())
                        <a href="login" class="btn btn-outline-success" type="submit">Login</a>
                    @else
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                {{Auth::user()->name ?? ''}}
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="/history-pembeli">History Product</a></li>
                                <li><a class="dropdown-item" href="/history-investasi">History Investasi</a></li>
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            </ul>
                        </div>
                    @endif
                </div>
            </nav>
        </header>
<br>
<br>
<div class="container position-relative my-5">
    <div class="row position-relative">
  
<section class="content">
      <div class="row">
        <div class="col-xs-2">
          <div class="box">
          <h4 style="text-align: center;">Histori Pembelian Investasi</h4>
            <br>
     
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="background-color:#2F4F4F;color:#fff;">No</th>
                  <th style="background-color:#2F4F4F;color:#fff;">Nama Barang</th>
                  <th style="background-color:#2F4F4F;color:#fff;">Jumlah Barang</th>
                  <th style="background-color:#2F4F4F;color:#fff;">Total Harga</th>
                  <th style="background-color:#2F4F4F;color:#fff;">Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $index=>$o )
               
                <tr>
                  <td>{{$index+1}}</td>
                  <td>{{$o->Nama}}</td>
                  <td>{{$o->jumlah}}</td>
                  <td>${{$o->total_harga}}.00</td>
                  <td>{{$o->status}}</td>
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
</html>
