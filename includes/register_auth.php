<?php
require 'koneksi.php';
if(isset($_POST['username'])){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];
    $bio = $_POST['bio'];
    $sekolah = $_POST['sekolah'];
    $gender = $_POST['gender'];
    var_dump($email, $username, $fullname, $password, $bio, $sekolah, $gender);
    // $q = mysqli_query($conn_mysqli, "SELECT * FROM `$dbname`.`signup` WHERE username = '$username'");
    // $check = mysqli_num_rows($q);
    // if($check > 0){
    //     header("location: ../registrasi.php?reg=Gagal");
    // }else{
    //     mysqli_query($conn_mysqli, "INSERT INTO `sosial-media`.`signup` (`email`, `username`, `fullname`, `password`, `bio`, `profile`, `school`, `gender`) VALUES ('w', 'w', 'w', 'ww', 'ee', 'w', 'w', 'ww'");
    // }
}
?>