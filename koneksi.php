<?php
    include("konfigurasi.php");

   $hasil = mysqli_connect(DBHOST, DBUSER, DBPASS);
  
   if($hasil){
    echo "koneksi ke mysql sukses";
   }else{
    echo "koneksi ke mysql gagal";
   }