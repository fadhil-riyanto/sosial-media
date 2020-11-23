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
include __DIR__.'/../config.php';
require 'koneksi.php';
require 'random_acak_nama.php';
require_once __DIR__ . '/../vendor/autoload.php';
$conn_signup = (new MongoDB\Client)->$dbname_db_fadhil_mongod->$db1;
if(isset($_POST['username'])){
    $email = htmlspecialchars($_POST['email']);
    $username = htmlspecialchars($_POST['username']);
    $fullname = htmlspecialchars($_POST['fullname']);
    $password = $_POST['password'];
    $bio = htmlspecialchars($_POST['bio']);
    $profileName = $_FILES['profile']['name'];
    $profileSementara = $_FILES['profile']['tmp_name'];
    $sekolah = htmlspecialchars($_POST['sekolah']);
    $gender = htmlspecialchars($_POST['gender']);
    //================ Add hash func ===================
    $passwordTerhash = hash('sha512', $password);

    // ============== set dir uploads
    $dirUpload = "upload/";
    //=============== ambil extension file =============
    $pecahExtension_fadhil = explode(".",$profileName);
    $extension_bool_fadhil = $pecahExtension_fadhil[1];

    $filename_rand_fadhil = $name_random.$profileName;

    // === Jika di array di temukan extensi tersebut maka hasil 0, dan jika lulus akan di upload
    // === Jika udah di upload query untuk mengecek ada username yg sama atau ngga
    if(in_array($extension_bool_fadhil,$exetensionFile_fadhil)){
        $terupload = move_uploaded_file($profileSementara, $dirUpload.$filename_rand_fadhil);
        $q = mysqli_query($conn_mysqli, "SELECT * FROM `$dbname`.`signup` WHERE username = '$username'");
        $check = mysqli_num_rows($q);
        //kalau ia diatas 0 brati ada
        if($check > 0){
            header("location: ../registrasi.php?reg=Gagal");
        }else{
            //kalau ngga ada data maka kueri ke db
            // Masukkan data baru ke db
            $conn_signup->insertOne([
                'email' => $email,
                'username' => $username,
                'fullname' => $fullname,
                'password' => $passwordTerhash,
                'bio' => $bio,
                'profile' => $filename_rand_fadhil,
                'school' => $sekolah,
                'gender' => $gender
            ]);
            
            //tendang ke index
            header("location: ../index.php");
            
        }
    }else{
        echo "extension not alowwed";
    }
     
    
    // //db check data ada apa nggak

    
}
?>