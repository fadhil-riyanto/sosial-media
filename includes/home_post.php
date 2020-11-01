<?php
session_start();

if(isset($_POST['post_textbox'])){
    $post_textbox_fadhil = $_POST['post_textbox'];
    $username = $_SESSION['username'];
    if(isset($_FILES['w_photo']['error'] == 4)){
        $post_filepostingan_fadhil = $_FILES['w_photo'];
    }
    
    var_dump($post_textbox_fadhil, $post_filepostingan_fadhil, $username);
    }