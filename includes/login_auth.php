<?php
/*+===========================================+
  |      (C) Fadhil Riyanto                   |
  +===========================================+
  | Kode sumber ini tunduk kepada pembuat     |
  | "Fadhil Riyanto" sebagai pengembang       |
  | aplikasi atau kode sumber                 |
  |                                           |
  | Pelanggaran akan di proses Sesuai         |
  | Undang Undang Hukum yang berlaku          |
  |                                           |
  | Anda dilarang                             |
  | - Mengklaim ini karya anda                |
  | - Menjual ulang atas nama anda            |
  | - Menggunakan untuk komersial (Ijin dulu) |
  |                                           |
  | Anda diperbolehkan                        |
  | - Mengedit                                |
  | - Mendistribusikan                        |
  | - Memperbaiki patch                       |
  | - Menggunakan untuk tujuan pendidikan     |
  |                                           |
  |___________________________________________|
  | Github : github.com/fadhil-riyanto        |
  | email  : id.fadhilriyanto[at]gmail.com    |
  |___________________________________________|*/
require __DIR__.'/../conf/koneksi.php';
session_start();
$conn_mysqli = mysqli_connect($servername, $username, $password, $dbname);

    $username = $_POST["username"];
    $password = $_POST["password"];
    $q = mysqli_query($conn_mysqli, "SELECT * FROM `$dbname`.`signup` WHERE username = '$username' AND password = '$password'");
    $hitung_data = mysqli_num_rows($q);
    if($hitung_data > 0){
        $_SESSION["username"] = $username;
    }else{
        header("Location : index?=gagal");
    }

