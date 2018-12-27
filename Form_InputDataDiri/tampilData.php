<?php
     if (isset($_POST['btnSubmit'])) {
          $namaLengkap = $_POST['namaLengkap'];
          $jeniskelamin = $_POST['radiojk'];
          $asal_smu = $_POST['asal_smu'];
          $kabkot = $_POST['Kabkot'];
          $provinsi = $_POST['provinsi'];
          $kodepos = $_POST['kodepos'];
          $kodeposrumah = $_POST['kodeposRumah'];
          $tempatlahir = $_POST['tempatlahir'];
          $tanggallahir = $_POST['tanggallahir'];
          $alamatkantor = $_POST['alamatkantor'];
          $telpkantor = $_POST['telpKantor'];
          $kodeposkantor = $_POST['kodeposKantor'];
          $alamatrumah = $_POST['alamatrumah'];
          $kelurahan = $_POST['Kelurahan'];
          $kecamatan = $_POST['Kecamatan'];
          $kabupaten = $_POST['Kabupaten'];
          $provinsirumah = $_POST['Provinsi'];
          $telprumah = $_POST['noTelpRumah'];
          $noHp = $_POST['noHp'];
          $email = $_POST['Email'];
     }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hasil Data</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
  </head>
  <body>
       <div class="container mt-3 mb-3">
            <div class="p-2 card">
                 <h1 class="text-center">Hasil Data</h1>
            </div>
            <div class="p-2 card table-responsive-lg">
                 <table class="table table-hover">
                   <thead>
                     <tr>
                       <th colspan="3">Biodata Diri</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td>Nama Lengkap</td>
                       <td>:</td>
                       <td><span><?php echo $namaLengkap ?></span> </td>
                     </tr>
                     <tr>
                       <td>Jenis Kelamin</td>
                       <td>:</td>
                       <td> <span><?php echo $jeniskelamin ?></span> </td>
                     </tr>
                     <tr>
                       <td>Asal SMU</td>
                       <td>:</td>
                       <td> <span><?php echo $asal_smu ?></span> </td>
                     </tr>
                     <tr>
                       <td>Kabupaten/Kota</td>
                       <td>:</td>
                       <td> <span><?php echo $kabkot ?></span> </td>
                     </tr>
                     <tr>
                       <td>Provinsi</td>
                       <td>:</td>
                       <td> <span><?php echo $provinsi ?></span> </td>
                     </tr>
                     <tr>
                       <td>Kode Pos</td>
                       <td>:</td>
                       <td> <span><?php echo $kodepos ?></span> </td>
                     </tr>
                     <tr>
                       <td>Tempat, tanggal Lahir</td>
                       <td>:</td>
                       <td> <span><?php echo $tempatlahir.", ".$tanggallahir ?></span> </td>
                     </tr>
                     <tr>
                       <td>Alamat Email</td>
                       <td>:</td>
                       <td> <span><?php echo $email ?></span> </td>
                     </tr>

                   </tbody>
                 </table>
            </div>
            <div class="p-2 card table-responsive-lg">
                 <table class="table table-hover">
                   <thead>
                     <tr>
                       <th colspan="3">Rumah</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td>Alamat Rumah</td>
                       <td>:</td>
                       <td> <span><?php echo $alamatrumah ?> </span> </td>
                     </tr>
                     <tr>
                       <td>Kelurahan</td>
                       <td>:</td>
                       <td> <span><?php echo $kelurahan ?> </span> </td>
                     </tr>
                     <tr>
                       <td>Kecamatan</td>
                       <td>:</td>
                       <td> <span><?php echo $kecamatan ?> </span> </td>
                     </tr>
                     <tr>
                       <td>Kabupaten</td>
                       <td>:</td>
                       <td> <span><?php echo $kabupaten ?> </span> </td>
                     </tr>
                     <tr>
                       <td>Provinsi</td>
                       <td>:</td>
                       <td> <span><?php echo $provinsirumah ?> </span> </td>
                     </tr>
                     <tr>
                       <td>Kode Pos</td>
                       <td>:</td>
                       <td> <span><?php echo $kodeposrumah ?> </span> </td>
                     </tr>
                     <tr>
                       <td>No. Telp</td>
                       <td>:</td>
                       <td> <span><?php echo $telprumah ?> </span> </td>
                     </tr>
                     <tr>
                       <td>No. Hp (Mobile Phone)</td>
                       <td>:</td>
                       <td> <span><?php echo $noHp ?> </span> </td>
                     </tr>
                   </tbody>
                 </table>
            </div>
            <div class="p-2 card table-responsive-lg">
                 <table class="table table-hover">
                   <thead>
                     <tr>
                       <th colspan="3">Kantor</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td>Alamat Kantor</td>
                       <td>:</td>
                       <td> <span><?php echo $alamatkantor; ?></span> </td>
                     </tr>
                     <tr>
                       <td>Kode Pos</td>
                       <td>:</td>
                       <td> <span><?php echo $kodeposkantor; ?></span> </td>
                     </tr>
                     <tr>
                       <td>No. Telp</td>
                       <td>:</td>
                       <td> <span><?php echo $telpkantor; ?></span> </td>
                     </tr>
                   </tbody>
                 </table>
            </div>
            <div class="p-1 card">
                 <span class="text-center">&copy 140810170020 - 140810170050 - 140810170052 | Pemrograman Web 2018</span>
            </div>
       </div>
  </body>
</html>
