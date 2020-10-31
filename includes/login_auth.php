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
   | Authors: Fadhil Riyanto                                            |
   | Github : github.com/fadhil-riyanto                                 |
   +--------------------------------------------------------------------+
*/
require 'koneksi.php';
session_start();
    // Anti sql injeksi
    $username = mysqli_real_escape_string($conn_mysqli, $_POST["username"]);
    $password = mysqli_real_escape_string($conn_mysqli, $_POST["password"]);
    // Anti Bots
    $id = ($_POST["id-0089"]);
    // Anti curi curi database
    $passwordTerhash = hash('sha512', $password);
    // Input procces
    if($id == null){
        $q = mysqli_query($conn_mysqli, "SELECT * FROM `$dbname`.`signup` WHERE username = '$username' AND password = '$passwordTerhash'");
        $hitung_data = mysqli_num_rows($q);
        if($hitung_data > 0){
            $_SESSION["username"] = $username;
            header("Location: ../home");
        }else{
            header("Location: ../index?login=gagal");
        }
    }else{
        header("Location: ../index?login=gagal");
    }
    


