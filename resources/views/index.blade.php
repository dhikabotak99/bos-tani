<!DOCTYPE html>
<html>
    <head>
        <title>BOS Tani</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel-rtl/">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
        <!-- <script>
            var myCarousel = document.querySelector('#myCarousel')
            var carousel = new bootstrap.Carousel(myCarousel)
        </script> -->
    </head>
    <body>
        <!-- NAVBAR -->
        <header>
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
                    <button class="btn btn-outline-success" type="submit">Login</button>
                </form>
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

        <!-- <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/2019/12/09/15731582.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="https://foto.kontan.co.id/zWePR7yKajLWaEMfJgAIOwAA9Ag=/smart/2014/09/08/31516295p.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="https://ecs7.tokopedia.net/img/cache/700/VqbcmM/2020/5/5/97b96e97-2886-443a-855d-2e02715f5197.jpg" class="d-block w-100">
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
        </div> -->

        <br>
            @if(count($product)>0)
            <div class="row g-3 d-flex justify-content-center">
                @foreach($product as $p)
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
                @endforeach
            </div>
            @else
            <p>There is no data ...</p>
            <a href="{{url('/input-product')}}"><button class="btn btn-dark">Add Product</button></a>
            @endif
        </div>
    </body>
</html>