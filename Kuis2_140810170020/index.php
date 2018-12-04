<?php include("config.php");?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Biodata</title>

    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  </head>
  <body>
       <div class="kontainer pt-3 pb-3 pl-4 pr-4">
            <div class="row card p-2">
                 <h1 class="text-center">Biodata Mahasiswa</h1>
            </div>
            <div class="row card text-center">
                 <table class="table table-hover table-bordered table-responsive">
                   <thead>
                     <tr>
                       <th>NIM</th>
                       <th>Nama Lengkap</th>
                       <th>Tempat, Tgl Lahir</th>
                       <th>JK</th>
                       <th>Agama</th>
                       <th>Warga Negara</th>
                       <th>Hobby</th>
                       <th>Alamat Rumah</th>
                       <th>Email</th>
                       <th>Tindakan</th>
                     </tr>
                   </thead>
                   <tbody>
                     <?php
                         $getBiodata = "SELECT * FROM tb_biodata";
                         $result = mysqli_query($konek, $getBiodata);
                         while($biodata = mysqli_fetch_array($result)){
                              if(mysqli_num_rows($result) > 0){
                                   echo "<tr>";
                                   echo "<td>".$biodata['nim']."</td>";
                                   echo "<td nowrap>".$biodata['nama']."</td>";
                                   echo "<td nowrap>".$biodata['tmp_lhr'].", ".$biodata['tgl_lhr']."</td>";
                                   echo "<td>".$biodata['jk']."</td>";
                                   echo "<td>".$biodata['agama']."</td>";
                                   echo "<td>".$biodata['warganegara']."</td>";
                                   echo "<td>".$biodata['hobby']."</td>";
                                   echo "<td nowrap>".$biodata['alamat']."</td>";
                                   echo "<td>".$biodata['email']."</td>";
                                   echo "<td nowrap>";
                                   echo "<a class='btn btn-primary' href='view_edit.php?nim=".$biodata['nim']."'>Edit</a> | ";
                                   echo "<a class='btn btn-danger' href='delete.php?nim=".$biodata['nim']."'>delete</a>";
                                   echo "</td>";
                                   echo "</tr>";
                              }
                         }
                     ?>
                   </tbody>
                 </table>
                 <div class="text-center p-3">
                      <a href="view_add.php" class="btn btn-primary">Add New Data</a>
                 </div>
            </div>
            <div class="row card p-2">
                 <span class="text-center">&copy Mohamad Achun Armando (140810710020) | Pemrograman Web 2018</span>
            </div>
       </div>
  </body>
</html>
