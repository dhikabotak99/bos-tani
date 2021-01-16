<!DOCTYPE html>
<html>
    <head>
        <title>BOS Tani</title>

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
                                <li><a class="dropdown-item" href="/history-pembeli">History</a></li>
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            </ul>
                        </div>
                    @endif
                </div>
            </nav>
        </header>
        <br>
        <br>
        <br>
        <br>
        <div class="d-flex p-2 bd-highlight container-sm" id="barang">
            <img src="{{url('/images/'.$investasi->img_path)}}" class="rounded" height="275px" width="275px">
            &emsp;
            <div class="flex flex-lg-row">
                <form action="/postInvestasi" method="GET">
                <h1 style="display: none;">asd</h1>
                    <input type="hidden" name="idInvestasi" value="{{$investasi->id}}">
                    <h3 class="card-title">{{$investasi->Nama}}</h3>
                    <br>
                    <div class="p-3 mb-2 bg-light text-warning"><h4>Rp {{$investasi->Harga}},00</h4></div>
                    <input type="hidden" name="Harga" value="{{$investasi->Harga}}">
                    <label for="kontrak">jumlah unit</label>
                    <input type="number" class="form-control" name="jumlah" value="1" min="1"><small>Tersisa {{$investasi->Unit_Tersisa}} unit</small>
                    <br>
                    <br>
                    <label for="kontrak">periode kontrak</label>
                    <input type="number" class="form-control" name="kontrak" value="1" min="1">
                    <br>
                    <br>
                    <button type="submit" class="p-2 btn btn-success">Pesan Sekarang</button>
                </form>
            </div>
        </div>
        <br>
        <div class="d-flex p-2 bd-highlight container-sm" id="barang">
            <img src="{{url('/images/indomart.jpg')}}" class="rounded-circle" height="100px" width="100px">
            &emsp;
            <div class="flex flex-lg-row">
                <h3 class="card-title">Surabaya Jaya</h3>
                <br>
                
            </div>
        </div>
        <br>
        <br>
    </body>
</html>
