<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Data Pribadi</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
  </head>
  <body>
    <div class="container mt-3 mb-3">
          <div class="row p-2 card">
               <h1 class="text-center">Data Pribadi</h1>
          </div>
          <form method="post" action="tampilData.php">
               <div class="row p-3 cardd">
                    <div class="col-sm-9">
                         <label for="namaLengkap">Nama Lengkap : </label>
                         <input type="text" name="namaLengkap" value="" class="form-control" required>
                    </div>
                    <div class="col-sm-3">
                         Jenis Kelamin :
                         <label>
                           <input name="radiojk" type="radio" value="Laki-laki" required>
                           Laki-Laki
                         </label>
                         <label>
                           <input name="radiojk" type="radio" value="Perempuan">
                           Perempuan
                         </label>
                    </div>
               </div>
               <div class="row p-3 cardd">
                    <div class="col-sm-6">
                         Asal SMU :
                         <input type="text" name="asal_smu" class="form-control" required>
                    </div>
                    <div class="col-sm-6">
                         Kabupaten/Kota :
                         <input type="text" name="Kabkot" class="form-control" required>
                    </div>
                    <div class="col-sm-6">
                         Provinsi :
                         <input type="text" name="provinsi" class="form-control" required>
                    </div>
                    <div class="col-sm-6">
                         Kode Pos: <input type="text" name="kodepos" class="form-control" required>
                    </div>
               </div>
               <div class="row p-3 cardd">
                    <div class="col-sm-6">
                         Tempat Lahir :
                         <input type="text" name="tempatlahir" class="form-control" required>
                    </div>
                    <div class="col-sm-6">
                         Tanggal Lahir :
                         <input type="date" name="tanggallahir" class="form-control" required>
                    </div>
               </div>
               <div class="row p-3 cardd">
                    <div class="col-sm-12">
                         Alamat Rumah/Kontak :
                         <input type="textarea" name="alamatrumah" class="form-control" required>
                    </div>
                    <div class="col-sm-4">
                         Kelurahan :
                         <input type="text" name="Kelurahan" class="form-control" required>
                    </div>
                    <div class="col-sm-4">
                         Kecamatan :
                         <input type="text" name="Kecamatan" class="form-control" required>
                    </div>
                    <div class="col-sm-4">
                         Kabupaten :
                         <input type="text" name="Kabupaten" class="form-control" required>
                    </div>
                    <div class="col-sm-6">
                         Provinsi :
                         <input type="text" name="Provinsi" class="form-control" required>
                    </div>
                    <div class="col-sm-6">
                         Kode Pos :
                         <input type="number" name="kodeposRumah" class="form-control" required>
                    </div>
                    <div class="col-sm-6">
                         No. Telp :
                         <input type="number" name="noTelpRumah" class="form-control">
                    </div>
                    <div class="col-sm-6">
                         No. HP (Mobile Phone) :
                         <input type="number" name="noHp" class="form-control" required>
                    </div>
               </div>
               <div class="row p-3 cardd">
                    <div class="col-sm-12">
                         Alamat kantor :
                         <input type="textarea" name="alamatkantor" class="form-control" required>
                    </div>
                    <div class="col-sm-6">
                         No. Telp :
                         <input type="number" name="telpKantor" class="form-control">
                    </div>
                    <div class="col-sm-6">
                         Kode Pos :
                         <input type="number" name="kodeposKantor" class="form-control" required>
                    </div>
               </div>
               <div class="row p-3 cardd">
                    <div class="col-sm-12">
                         Alamat Email :
                         <input type="email" name="Email" class="form-control" required>
                    </div>
               </div>
               <div class="row p-3 cardd">
                    <div class="col-sm-12 text-center">
                         <button type="submit" name="btnSubmit" class="btn btn-primary">Submit Data</button>
                    </div>
               </div>
          </form>
    </div>
  </body>
</html>
