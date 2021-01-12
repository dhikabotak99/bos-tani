<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> PRODUCT </title>
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
        <li class="nav-item active">
          <a class="nav-link" href="product">INPUT PRODUK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="order">PENJUALAN</a>
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

<section class="content">
      <div class="row">
        <div class="col-xs-2">
          <div class="box">
          <h4 style="text-align: center;">LIST PENJUALAN</h4>
          <h6 style="text-align: Left;"> Silahkan Masukkan Hasil Panen Yang Ingin Kamu Jual: </h6>
            <a href="addProduct" class="btn btn-#2F4F4F btn-sm"><i class="fa fa-plus"></i> Tambah</a>
            <br />
            <br>

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="background-color:#2F4F4F;color:#fff;">No</th>
                  <th style="background-color:#2F4F4F;color:#fff;" width="300px">Nama</th>
                  <th style="background-color:#2F4F4F;color:#fff;">Price</th>
                  <th style="background-color:#2F4F4F;color:#fff;">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  $no = 1;
                 ?>
                @foreach($product as $p )
               
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$p->name}}</td>
                  <td>${{$p->price}}.00</td>
                  <td style="text-align: center;">
                  <a class='btn btn-info btn-xs' href="{{url('product/edit')}}/{{$p->id}}" class=""> Edit<i class="glyphicon glyphicon-edit"></i> </a> &nbsp;&nbsp;
                  <a class='btn btn-danger btn-xs' href="{{url('product/delete')}}/{{$p->id}}" class=""> Delete<i class="glyphicon glyphicon-edit"></i> </a> 
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
