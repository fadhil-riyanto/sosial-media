<?php
/*
   +--------------------------------------------------------------------+
   | Sosial Media <The Sosial Network>                                  |
   +--------------------------------------------------------------------+
   | Copyright (c) Fadhil Riyanto                                       |
   +--------------------------------------------------------------------+
   | Kode sumber ini tunduk kepada pembuat "Fadhil Riyanto" sebagai     |
   | pengembang aplikasi atau kode sumber tersebut.                     |
   |                                                                    |
   | Pelanggaran akan di proses Sesuai Undang Undang Hukum yang berlaku |
   | di Indonesia.                                                      |
   |                                                                    |
   | Anda dilarang                                                      |
   | - Mengklaim ini karya anda.                                        |
   | - Menjual ulang atas nama anda.                                    |
   | - Menggunakan untuk komersial (Ijin dulu).                         |
   |                                                                    |
   | Anda diperbolehkan                                                 |
   | - Mengedit.                                                        |
   | - Mendistribusikan.                                                |
   | - Memperbaiki patch.                                               |
   | - Menggunakan untuk tujuan pendidikan.                             |
   +--------------------------------------------------------------------+
   | Authors: Fadhil Riyanto<andi@php.net>                              |
   | Github : github.com/fadhil-riyanto                                 |
   +--------------------------------------------------------------------+
*/
require 'koneksi.php';
if(isset($_POST['username'])){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];
    $bio = $_POST['bio'];
    $sekolah = $_POST['sekolah'];
    $gender = $_POST['gender'];
    
    //db check data ada apa nggak

    $q = mysqli_query($conn_mysqli, "SELECT * FROM `$dbname`.`signup` WHERE username = '$username'");
    $check = mysqli_num_rows($q);
    //kalau ia diatas 0 brati ada
    if($check > 0){
        header("location: ../registrasi.php?reg=Gagal");
    }else{
        //kalau ngga ada data maka kueri ke db
        mysqli_query($conn_mysqli, "INSERT INTO `signup` (`email`, `username`, `fullname`, `password`, `bio`, `profile`, `school`, `gender`) VALUES ('$email', '$username', '$fullname', '$password', '$bio', 'profile', '$sekolah', '$gender')");
        //tendang ke index dan buat session
        header("location: ../index.php");
        
    }
}
?>