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
                            <a class="nav-link" href="/product">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/investasi">Investasi</a>
                        </li>
                    </ul>
                </div>
                <form class="d-flex">
                    <button class="btn btn-outline-success" type="submit">Login</button>
                </form>
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
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/tomat.jpg" class="d-block" height="465px" width="1349px">
                </div>
                <div class="carousel-item">
                    <img src="/images/brokoli.jpg" class="d-block" height="465px" width="1349px">
                </div>
                <div class="carousel-item">
                    <img src="/images/bayam.jpg" class="d-block" height="465px" width="1349px">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
        <br>
        @if(count($product)>0)
        <div class="row g-3 d-flex justify-content-center">
            @foreach($product as $index=>$p)
            <div class="card" style="width: 18rem;">
                <img src="{{url('/images/'.$p->img_path)}}" class="card-img-top" height="262px" width="262px">
                <div class="card-body">
                    <h5 class="card-title">{{$p->Nama}}</h5>
                    <p class="card-text">{{$p->Deskripsi}}</p>
                    <h3 class="card-title">${{$p->Harga}}.00</h3>
                    <a href="{{url('/order-product/'.$p->id)}}" class="btn btn-success">Order Now</a>
                </div>
            </div>
            &nbsp;&nbsp;
                @if ($index == 7)
                    @break
                @endif
            @endforeach
            
        </div>
        @else
        <center>
            <p>There is no product...</p>
        </center>
        @endif
    </body>
</html>