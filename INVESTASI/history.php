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

    <title>History</title>
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
                <button class="btn btn-outline-success" type="submit">Login</button>
            </form>
        </nav>
        <h1 class="text-center">History</h1>
    <br><br>
    <div class="container d-flex justify-content-center">
        <table class="table table-striped">
            <tr class="bg-primary text-white">
                <th>#</th>
                <th>Product</th>
                <th>Buyer Name</th>
                <th>Contact</th>
                <th>Amount</th>
            </tr>
            </body>
</html>