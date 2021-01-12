<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "laboratory";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
  echo "<script> alert('Failed to connect') </script>";  
}
?>