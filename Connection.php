<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "belajar_php";
    $conn = new mysqli_connect( $host, $user, $password, $database);
    if($conn){
      echo "success";
    } else {
      echo "Gagal";
    }
 ?>
