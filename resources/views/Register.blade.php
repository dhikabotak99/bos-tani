<!DOCTYPE html>
<html>
    <head>
        <title>BOS Tani</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
                <button class="btn btn-outline-success" type="submit">Login</button>
            </form>
        </nav>
    <?php
    if (isset($_GET['alert'])) {
    ?>
        <div class="alert alert-warning" role="alert"> Sucessful! </div>

    <?php } ?>

    <div class="container mt-3 d-flex justify-content-center">
        <form action="RegisterEvent.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="mt-4 text-center">Registration</h1><br>
                            <div class="form-group mt-4">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" required size="43px">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">E-mail</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required size="43px">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone Number</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone" required size="43px">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="pass" required size="43px">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Confirm Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="k-pass" required size="43px">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" name="register">register</button>
                                <p>Already have Account?<a href="Login.php">Login</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>