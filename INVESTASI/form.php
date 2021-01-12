<!doctype html>
<?php

$id = $_GET["id"];
$conn = mysqli_connect("localhost","root","","laboratory");
$result = mysqli_query($conn,"SELECT * FROM event_table WHERE id = $id");

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Pembiayaan</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">BOS Tani</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Product</a>
                    </li>
                </ul>
            </div>
            <form class="d-flex">
                <button class="btn btn-outline-success" type="submit" href="history.php">Login</button>
            </form>
        </nav>
<h3>Form Pembiayaan</h3>
    <div class="container">
      <div class="row">
        <div class="col-sm bg-white kiri">
        
        <div class="card border-dark mb-3" >
  <div class="card-header bg-danger "></div>
  <div class="card-body text-dark">

  <form method="POST" action="proses_event.php" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input name="nama" class="form-control" type="text" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input name="email" class="form-control" type="text" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Kontak(no.HP/Telepon)</label>
              <input name="nohp" class="form-control" type="text" value="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Alamat</label>
              <input name="alamat" class="form-control" type="text" value="">
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
            <label for="exampleFormControlSelect1">Provinsi</label>
            <select class="form-control" id="exampleFormControlSelect1" name="mulai">
              <option>Aceh</option>
              <option>Sumatera Utara</option>
              <option>Sumatra Barat</option>
              <option>Riau</option>
              <option>Kepulauan Riau</option>
              <option>Jambi</option>
              <option>Bengkulu</option>
              <option>Sumatera Selatan</option>
              <option>Kepulauan Bangka Belitung</option>
              <option>Lampung</option>
              <option>Banten</option>
              <option>Jawa Barat</option>
              <option>Jakarta</option>
              <option>Jawa Tengah</option>
              <option>Yogyakarta</option>
              <option>Jawa Timur </option>
              <option>Bali</option>
              <option>NTB</option>
              <option>NTT</option>
              <option>Kalimantan Barat</option>
              <option>Kalimantan Selatan</option>
              <option>Kalimantan Tengah</option>
              <option>Kalimantan Timur</option>
              <option>Kalimantan Utara</option>
              <option>Sulawesi</option>
              <option>Maluku</option>
              <option>Papua</option>
            </select>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="exampleFormControlSelect1">Kota</label>
            <select class="form-control" id="exampleFormControlSelect1"  name="berakhir">
            <option>Jakarta </option>
              <option>Bandung</option>
              <option>Bogor</option>
              <option>Tasikmalaya</option>
              <option>Banda Aceh</option>
              <option>Sabang</option>
              <option>Denpasar</option>
              <option>Tangerang</option>
              <option>Bengkulu</option>
              <option>Gorontalo</option>
              <option>Magelang</option>
              <option>Semarang</option>
              <option>Malang</option>
              <option>Madiun</option>
              <option>Mojokerto</option>
              <option>Surabaya</option>
              <option>Pasuruan</option>
              <option>Pontianak</option>  
              <option>Banjarmasin</option>
              <option>Balikpapan</option>
              <option>Samarinda</option>
              <option>Makassar</option>
              <option>Palu</option>
              <option>Yogyakarta</option>
              <option>Jayapura</option>
            </select>
            </div>
          </div> 
        </div>
  </div>
</div>

        <div class="col-sm bg-white kanan">  
        <div class="card border-dark mb-3" >
        <div class="card-header bg-primary "></div>
        <div class="card-body text-dark">

        <div class="form-group">
              <label for="exampleInputEmail1">Bank</label>
              <input name="nama" class="form-control" type="text" value="">
            </div>

          <div class="form-group">
              <label for="exampleInputEmail1">No.Rek</label>
              <input name="tempat" class="form-control" type="text" value="Zoom Meeting">
            </div>   
          <div class="form-group">
              <label for="exampleInputEmail1">No.KTP</label>
              <input type="phone" name="harga" class="form-control">
          </div>
          <div class="form-group">
              <label for="exampleFormControlTextarea1">Upload KTP</label>
            <div class="custom-file">
              <input name="upload" type="file" class="custom-file-input" id="customFile">
              <!-- <input type="file" name="upload"> -->
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            </div>

          <div class="form-group">
              <label for="exampleInputEmail1">Benefit</label>
              <br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="benefit[]" value="Snacks">
            <label class="form-check-label" for="inlineCheckbox1">Saya menyatakan data diatas adalah benar. Saya Juga menyataan Bahwa Bos Tani Berhak untuk melakukan pengecekan</label>
          </div>

          </div>
              <div class="box" style="float: right;">
              <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
              <button type="button" class="btn btn-danger">Cancel</button>
          </div>
          
        </div>
      </div>
    </div>
</form>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>