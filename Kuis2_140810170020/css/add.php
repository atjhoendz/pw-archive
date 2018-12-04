<?php
     include("config.php");

     if(isset($_POST['submit'])){
          $nim = $_POST['nim'];
          $nama = $_POST['nama'];
          $tmp_lhr = $_POST['tmp_lhr'];
          $tgl_lhr = $_POST['tgl_lhr'];
          $hobby = $_POST['hobby'];
          $jk = $_POST['radiojk'];
          $agama = $_POST['agama'];
          $warganegara = $_POST['warganegara'];
          $alamat = $_POST['alamat'];
          $email = $_POST['email'];

          $insert = "INSERT INTO tb_biodata VALUE('$nim', '$nama', '$tmp_lhr', '$tgl_lhr', '$hobby', '$jk', '$agama', '$warganegara', '$alamat', '$email')";
          $query = mysqli_query($konek, $insert);
          if($query){
               header('Location : index.php');
          }else{
               echo "Error";
          }
     }else{
          echo "Gagal submit data";
     }
?>
