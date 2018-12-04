<?php
     include("config.php");

     if(isset($_GET['nim'])){
          $nim = $_GET['nim'];
          $delete = "DELETE FROM tb_biodata WHERE nim = '$nim'";
          $query = mysqli_query($konek, $delete);
          if($query){
               header('Location: index.php');
          }else{
               die("Gagal Menghapus");
          }
     }else{
          die("Tidak ada akses");
     }
?>
