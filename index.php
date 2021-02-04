<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>


      <div class="container col-md-6></col-md-6">
         <div class="card">
            <div class="card-header bg-primary text-white">
            input Data Mahasiswa
         </div>
         <div class="card-body">
               <form action="" method="POST" class="from-item">

                <div class="form-group">
                       <label for="Npm">NPM</label>
                       <input type="number" name="NPM" class="form-control col md-9" placeholder="Masukkan Npm">
                </div>

                <div class="form-group">
                        <label for="Nama">NAMA</label>
                        <input type="text" name="Nama" class="form-control col md-9" placeholder="Masukkan Nama">
                </div>

                <div class="form-group">
                        <label for="Tempat_Lahir">Tempat Lahir</label>
                        <input type="text" name="Tempat lahir" class="form-control col md-9" placeholder="Masukkan Tempat Lahir">
                </div>   

                <div class="form-group">
                        <label for="Tanggal_Lahir">Tanggal Lahir</label>
                        <input type="date" name="Tanggal lahir" class="form-control col md-9" placeholder="Masukkan Tanggal Lahir">
                </div>  

                <div class="form-group">
                       <label for="Jenis_Kelamin">Jenis kelamin</label>
                       <input type="Enum('L','P')" name="Jenis Kelamin" class="form-control col md-9" placeholder="Masukkan Jenis Kelamin">
                </div> 

                <div class="form-group">
                        <label for="Alamat">Alamat</label>
                        <input type="text" name="Alamat" class="form-control col md-9" placeholder="Masukkan Alamat">
                </div> 

                <div class="form-group">
                        <label for="Kodepos">Kodepos</label>
                        <input type="number" name="Kodepos" class="form-control col md-9" placeholder="Masukkan Kodepos">
                </div>     

                <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                <button type="reset" class="btn btn-danger">BATAL</button>     
               </form>

             </div>
       </div>
   </div>    

</body>
</html>

<?php

      include "koneksi.php";
      if(isset($_POST['simpan']))
      {
              $npm            =$_POST['npm'];
              $nama           =$_POST['nama'];
              $tempat_lahir   =$_POST['tempat_lahir'];
              $tanggal_lahir  =$_POST['tanggal_lahir'];
              $jenis_kelamin  =$_POST['jenis_kelamin'];
              $alamat         =$_POST['alamat'];
              $kodepos        =$_POST['ksodepos'];

               mysqli_query($koneksi, "INSERT INTO mahasiswa7 VALUES('',
                      '$npm','$nama','$tanggal_lahir','$tanggal_lahir','$jenis_kelamin','$alamat','$kodepos'
                )") or die(mysqli_error($koneksi));

                echo "<div align='center'><h5> Silahkan Tunggu,Data Sedang Disimpan......</h5></div>";
                echo "<meta http-equiv='refresh' content='1;url=http://localhost/web-mahasiswa7/data_mahasiswa.php'>";
       }
?>       