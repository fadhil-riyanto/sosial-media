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
        'project_name'                    => 'Sosial Media',
        'favicon_path_files'              => '',
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
        
        
        //============= Login ==============,
        'signup' => 'Daftar',
        'die_login_head_modal_boostrap'   => 'Maaf',
        'die_login_username_boostrap'     => 'Login gagal, mungkin password dan username salah!',
        'login'                           => 'Masuk',
        'login_username'                  => 'Username',
        'login_username_placeholder'      => 'Enter Username',
        'login_password'                  => 'Password',
        'login_password_placeholder'      => 'Enter Password',
        'registration_login_link'         => 'Registrasi di sini',
        'button_send_from_login'     => 'Masuk!');
   return $lang[$txt];
}
