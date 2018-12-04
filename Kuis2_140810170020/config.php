<?php
     $host = "localhost";
     $user = "apache";
     $password = "";
     $database = "db_mhs";

     $konek = mysqli_connect($host, $user, $password, $database);

     if(!$konek){
          die("Gagal terhubung ke database: " . mysqli_connect_error());
     }
?>
