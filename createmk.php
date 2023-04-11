<?php
    include("konfigurasi.php");

   $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);
  
   if($cnn){
    $tbel = "tbMK";
    $sql = "CREATE TABLE  $tbel(
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        kodeMK VARCHAR (8),
        matakuliah VARCHAR (50),
        sks INT

    )";
    $hasil = mysqli_query($cnn, $sql);
   if($hasil){
    echo "pembuatan tabel" . $tbel . "sukses";
   }else{
    echo "pembuatan tabel" . $tbel . "gagal";
   }


}else{
    echo "koneksi ke mysql gagal";
   }