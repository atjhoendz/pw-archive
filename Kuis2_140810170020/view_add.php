<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Biodata</title>

    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  </head>
  <body>
    <div class="container mt-3 mb-3">
         <div class="row card p-2">
              <h1 class="text-center">Tambah Data</h1>
         </div>
         <div class="row card p-3">
              <form action="add.php" method="POST">
                   <fieldset class="form-group">
                        <p>
                             <small>Nama Lengkap</small>
                             <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap" required>
                        </p>
                        <p>
                             <small>Nomor Induk Mahasiswa</small>
                             <input type="text" class="form-control" name="nim"  placeholder="Masukan NIM" required>
                        </p>
                        <div class="row">
                             <div class="col-md-8">
                                  <small>Tempat Lahir</small>
                                  <input type="text" class="form-control" name="tmp_lhr" placeholder="Tempat Lahir" required>
                             </div>
                             <div class="col-md-4">
                                  <small>Tanggal Lahir</small>
                                  <input type="date" class="form-control" name="tgl_lhr" placeholder="Tempat Lahir" required>
                             </div>
                        </div>
                        <p>
                             <div class="row">
                                 <div class="col-md-6">
                                      <small>Pilih Hobby</small>
                                      <select multiple class="form-control" name="hobby[]" required>
                                           <option>Coding</option>
                                           <option>Membaca</option>
                                           <option>Main Game</option>
                                           <option>Travelling</option>
                                           <option>Bersepeda</option>
                                      </select>
                                 </div>
                                 <div class="col-md-6">
                                      <small>Jenis Kelamin : </small>
                                      <div class="custom-radio">
                                          <label>
                                               <input type="radio" name="radiojk" value="L" required> Laki-Laki
                                          </label>
                                          <label>
                                               <input type="radio" name="radiojk" value="P">Perempuan
                                          </label>
                                     </div>
                                 </div>
                            </div>
                        </p>
                        <div class="row">
                             <div class="col-md-6">
                                  <small>Agama</small>
                                  <select class="form-control" name="agama" required>
                                       <option>Islam</option>
                                       <option>Kristen</option>
                                       <option>Hindu</option>
                                       <option>Budha</option>
                                       <option>Konghuchu</option>
                                  </select>
                             </div>
                             <div class="col-md-6">
                                  <small>Warga Negara</small>
                                  <select class="form-control" name="warganegara">
                                       <option>WNI</option>
                                       <option>WNA</option>
                                  </select>
                             </div>
                        </div>
                        <p>
                             <small>Alamat Rumah</small>
                             <textarea class="form-control" name="alamat" rows="3" cols="80" placeholder="Masukan Alamat Rumah"></textarea>
                        </p>
                        <p>
                             <small>Email</small>
                             <input type="email" class="form-control" name="email" placeholder="Alamat Email" required>
                        </p>

                   </fieldset>
                   <div class="text-center">
                        <input class="btn btn-primary" type="submit" name="addData" value="Add Data">
                        <a href="index.php" class="btn btn-secondary">Back to Home</a>
                   </div>
              </form>
         </div>
    </div>
  </body>
</html>
