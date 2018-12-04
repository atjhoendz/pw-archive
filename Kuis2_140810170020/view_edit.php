<?php
     include("config.php");
     if(!isset($_GET['nim'])){
          header('Location: index.php');
     }

     $nim = $_GET['nim'];
     $getData = "SELECT * FROM tb_biodata WHERE nim = $nim";
     $query = mysqli_query($konek, $getData);
     $biodata = mysqli_fetch_assoc($query);

     if(mysqli_num_rows($query)<1){
          die("Data tidak ditemukan");
     }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Update Biodata</title>

    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  </head>
  <body>
    <div class="container mt-3 mb-3">
         <div class="row card p-2">
              <h1 class="text-center">Update Data</h1>
         </div>
         <div class="row card p-3">
              <form action="edit.php" method="POST">
                   <fieldset class="form-group">
                        <input type="hidden" name="nimAwal" value="<?php echo $_GET['nim']; ?>">
                        <p>
                             <small>Nama Lengkap</small>
                             <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap" value="<?php echo $biodata['nama']; ?>" required>
                        </p>
                        <p>
                             <small>Nomor Induk Mahasiswa</small>
                             <input type="text" class="form-control" name="nim"  placeholder="Masukan NIM" value="<?php echo $biodata['nim']; ?>" required>
                        </p>
                        <div class="row">
                             <div class="col-md-8">
                                  <small>Tempat Lahir</small>
                                  <input type="text" class="form-control" name="tmp_lhr" placeholder="Tempat Lahir" value="<?php echo $biodata['tmp_lhr']; ?>" required>
                             </div>
                             <div class="col-md-4">
                                  <small>Tanggal Lahir</small>
                                  <input type="date" class="form-control" name="tgl_lhr" placeholder="Tanggal Lahir" value="<?php echo $biodata['tgl_lhr']; ?>" required>
                             </div>
                        </div>
                        <p>
                             <div class="row">
                                 <div class="col-md-6">
                                      <small>Pilih Hobby</small>

                                      <select multiple class="form-control" name="hobby[]" required>
                                           <?php
                                           $s_hobby = $biodata['hobby'];
                                           $a_hobby = explode(",", $s_hobby);
                                           $list = ['Coding','Membaca','Main Game','Travelling','Bersepeda'];
                                           foreach ($list as $x){
                                                echo "<option ".(in_array($x, $a_hobby)?"selected":"").">$x</option>";
                                           }
                                           ?>

                                      </select>
                                 </div>
                                 <div class="col-md-6">
                                      <small>Jenis Kelamin : </small>
                                      <?php $jk = $biodata['jk']; ?>
                                      <div class="custom-radio">
                                          <label>
                                               <input type="radio" name="radiojk" value="L" <?php echo ($jk == 'L') ? "checked": "" ?> required> Laki-Laki
                                          </label>
                                          <label>
                                               <input type="radio" name="radiojk" value="P" <?php echo ($jk == 'P') ? "checked": "" ?> >Perempuan
                                          </label>
                                     </div>
                                 </div>
                            </div>
                        </p>
                        <div class="row">
                             <div class="col-md-6">
                                  <small>Agama</small>
                                  <?php $agama = $biodata['agama']; ?>
                                  <select class="form-control" name="agama" required>
                                       <option <?php echo ($agama == 'Islam') ? "selected": "" ?> >Islam</option>
                                       <option <?php echo ($agama == 'Kristen') ? "selected": "" ?> >Kristen</option>
                                       <option <?php echo ($agama == 'Hindu') ? "selected": "" ?> >Hindu</option>
                                       <option <?php echo ($agama == 'Budha') ? "selected": "" ?> >Budha</option>
                                       <option <?php echo ($agama == 'Konghuchu') ? "selected": "" ?> >Konghuchu</option>
                                  </select>
                             </div>
                             <div class="col-md-6">
                                  <small>Warga Negara</small>
                                  <?php $wn = $biodata['warganegara']; ?>
                                  <select class="form-control" name="warganegara">
                                       <option <?php echo ($wn == 'WNI') ? "selected": "" ?> >WNI</option>
                                       <option <?php echo ($wn == 'WNA') ? "selected": "" ?> >WNA</option>
                                  </select>
                             </div>
                        </div>
                        <p>
                             <small>Alamat Rumah</small>
                             <textarea class="form-control" name="alamat" rows="3" cols="80" placeholder="Masukan Alamat Rumah"><?php echo $biodata['alamat']; ?></textarea>
                        </p>
                        <p>
                             <small>Email</small>
                             <input type="email" class="form-control" name="email" placeholder="Alamat Email" value="<?php echo $biodata['email']; ?>" required>
                        </p>

                   </fieldset>
                   <div class="text-center">
                        <input class="btn btn-primary" type="submit" name="updateData" value="Update">
                        <a href="index.php" class="btn btn-secondary">Back to Home</a>
                   </div>
              </form>
         </div>
    </div>
  </body>
</html>
