<?php
     include("config.php");

     if(isset($_POST['updateData'])){
          $nimAwal = $_POST['nimAwal'];
          $nim = $_POST['nim'];
          $nama = $_POST['nama'];
          $tmp_lhr = $_POST['tmp_lhr'];
          $tgl_lhr = $_POST['tgl_lhr'];
          $jk = $_POST['radiojk'];
          $agama = $_POST['agama'];
          $warganegara = $_POST['warganegara'];
          $array_hobby = $_POST['hobby'];
          $alamat = $_POST['alamat'];
          $email = $_POST['email'];

          $dataHobby = '';
          foreach ($array_hobby as $hobby) {
               $dataHobby = $hobby.",".$dataHobby;
          }

          $update = "UPDATE tb_biodata SET nim='$nim', nama='$nama', tmp_lhr='$tmp_lhr', tgl_lhr='$tgl_lhr', jk='$jk', agama='$agama', warganegara='$warganegara', hobby='$dataHobby', alamat='$alamat', email='$email' WHERE nim = '$nimAwal'";
          $query = mysqli_query($konek, $update);
          if($query){
               header('Location: index.php');
          }else{
               die("Gagal mengupdate data");
          }
     }else{
          echo "Tidak memiliki akses";
     }
?>
