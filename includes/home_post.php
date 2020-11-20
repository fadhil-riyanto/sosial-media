<?php
include 'koneksi.php';
include 'random_acak_nama.php';

session_start();

if(isset($_POST['post_textbox'])){
    $post_textbox_fadhil = htmlspecialchars($_POST['post_textbox']);
    $username = $_SESSION['username'];
    $post_filepostingan_fadhil = $_FILES['w_photo']['name'];
    $post_filepostingan_fadhil_temp = $_FILES['w_photo']['tmp_name'];
    $upload_dir_fadhil = 'post_image_upload/';
    $nama_baru = $name_random.$post_filepostingan_fadhil;
    move_uploaded_file($post_filepostingan_fadhil_temp, $upload_dir_fadhil.$nama_baru);
  
    mysqli_query($conn_mysqli, "INSERT INTO `postingan`(`username_author`,`image_name`,`contect`,`like_postingan`) VALUES ('$username','$nama_baru','$post_textbox_fadhil','1')");
    
    var_dump($post_textbox_fadhil, $post_filepostingan_fadhil, $username, $post_filepostingan_fadhil_temp);
    }
    