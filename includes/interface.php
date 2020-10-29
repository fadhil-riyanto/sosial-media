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
  
function lang($txt){
     $lang = array(
    
    'register' => 'Buat Akun',
    'email_register' => 'Email',
    'email_register_placeholder' => 'Enter Email',
    'reg_fullname' => 'Full Name',
    'reg_bio' => 'Bio',
    'sekolah' => 'Sekolah',
    'gender' => 'Jenis Kelamin',
    //==================================
    'html_title_tag' => 'Sosial Media',
    'popup_Login_not_valid_modal_title' => 'Maaf',
    'popup_Login_not_valid'=> 'Login gagal, mungkin password dan username salah!',
    'login' => 'Masuk',
    'label_username' => 'Username',
    'label_username_placeholder' => 'Enter Username',
    'label_password' => 'Password',
    'label_password_placeholder' => 'Enter Password',
    'registration_login_link' => 'Registrasi di sini',
    'login_button' => 'Masuk!',
    'signup' => 'Daftar');
    return $lang[$txt];
}

?>
