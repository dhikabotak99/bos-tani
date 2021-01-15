<!DOCTYPE html>
<html>
    <head>
        <title>BOS Tani</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel-rtl/">

    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
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
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/product">Produk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/investasi">Investasi <span class="sr-only">(current)</span></a>
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
                                <li><a class="dropdown-item" href="/history-pembeli">History</a></li>
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            </ul>
                        </div>
                    @endif
                </div>
            </nav>
        </header>
        <!-- END OF NAVBAR -->

        <!-- SIDEBAR -->
        <!-- <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul> -->
        <!-- END OF SIDE BAR -->
        <br>
        <br>
        <br>
        @if(count($investasi)>0)
        <div class="row g-3 d-flex justify-content-center">
            @foreach($investasi as $i)
            <div class="card" style="width: 18rem;">
                <img src="{{url('/images/'.$i->img_path)}}" class="card-img-top" height="262px" width="262px">
                <div class="card-body">
                    <h5 class="card-title">{{$i->Nama}}</h5>
                    <p class="card-text">Hasil: {{$i->Hasil}}%</p>
                    <p class="card-text">Periode: {{$i->Periode_Kontrak}} Tahun</p>
                    <p class="card-text">Bagi Hasil:{{$i->Periode_Bagi_hasil}} Tahun</p>
                    <h3 class="card-title">IDR{{$i->Harga}}000.00</h3>
                    <a href="{{url('/order-product/'.$i->id)}}" class="btn btn-success">Order Now</a>
                </div>
            </div>
            &nbsp;&nbsp;
            @endforeach
        </div>
        @else
        <center>
            <p>There is no product...</p>
        </center>
        @endif
    </body>
</html>