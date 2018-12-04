<?php
     include("config.php");

     if(isset($_POST['addData'])){
          $nim = $_POST['nim'];
          $nama = $_POST['nama'];
          $tmp_lhr = $_POST['tmp_lhr'];
          $tgl_lhr = $_POST['tgl_lhr'];
          $array_hobby = $_POST['hobby'];
          $jk = $_POST['radiojk'];
          $agama = $_POST['agama'];
          $warganegara = $_POST['warganegara'];
          $alamat = $_POST['alamat'];
          $email = $_POST['email'];
          $dataHobby = '';
          foreach ($array_hobby as $hobby) {
               $dataHobby = $hobby.",".$dataHobby;
          }
          $insert = "INSERT INTO tb_biodata VALUES('$nim', '$nama', '$tmp_lhr', '$tgl_lhr', '$jk', '$agama', '$warganegara', '$dataHobby', '$alamat', '$email')";
          // echo $insert;
          $query = mysqli_query($konek, $insert);

          if($query){
               header('Location: index.php');
          }else{
               die("Gagal Menambah Data");
          }
     }else{
          echo "Gagal submit data";
     }
?>
