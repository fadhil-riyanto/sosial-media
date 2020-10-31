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
// ======================= Database =======================
$server_fadhil                            = "localhost";
$username_db_fadhil                       = "root";
$password_db_fadhil                       = "root";
$dbname_db_fadhil                         = "sosial-media";

// =========== Extensi yang di ijinkan untuk di upload di form upload =============
$exetensionFile_fadhil = array(
            "jpg",
            "png",
            "gif"
         );

function lang($txt){
    $lang = array(
        'copyrightname'                   => 'Fadhil Riyanto',
        //=============Register==============
        'register'                        => 'Buat Akun',
        'email_register'                  => 'Email',
        'email_register_placeholder'      => 'Enter Email',
        'username_register'               => 'Username',
        'username_register_placeholder'   => 'Enter Username',
        'fullname_register'               => 'Full Name',
        'fullname_register_placeholder'   => 'Enter Full Name',
        'password_register'               => 'Password',
        'password_register_placeholder'   => 'Enter Password',
        'bio_register'                    => 'Bio',
        'bio_register_placeholder'        => 'Enter Bio',
        'profile_register'                => 'Profile',
        'school_register'                 => 'Sekolah',
        'school_register_placeholder'     => 'Enter Sekolah',
        'gender'                          => 'Jenis Kelamin',
        'die_register_head_modal_boostrap'=> 'Maaf',
        'die_register_username_boostrap'  => 'Maaf, username telah digunakan!',
        'button_send_form_register'       => 'Daftar!',
        'back_to_login_from_register'     => 'Login di sini',
        
        
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