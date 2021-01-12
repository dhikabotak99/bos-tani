<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> HISTORY </title>
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
        <li class="nav-item">
          <a class="nav-link" href="order">ORDER</a>
        </li>    
        <li class="nav-item active">
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
          <h4 style="text-align: center;">History</h4>
            <br>
     
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="background-color:#2F4F4F;color:#fff;">No</th>
                  <th style="background-color:#2F4F4F;color:#fff;" width="300px">Product</th>
                  <th style="background-color:#2F4F4F;color:#fff;">Buyer Name</th>
                  <th style="background-color:#2F4F4F;color:#fff;">Buyer Contact</th>
                  <th style="background-color:#2F4F4F;color:#fff;">Amount</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  $no = 1;
                 ?>
                @foreach($history_data as $h )
               
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$h->name}}</td>
                  <td>{{$h->buyer_name}}</td>
                  <td>{{$h->buyer_contact}}</td>
                  <td>${{$h->amount}}.00</td>
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
