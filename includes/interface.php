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
  
function lang($txt){
     $lang = array(
    
    
    'html_title_tag' => 'Sosial Media',
    'login' => 'Masuk',
    'label_username' => 'Username',
    'label_username_placeholder' => 'Enter Username',
    'label_password' => 'Password',
    'label_password_placeholder' => 'Enter Password',
    'registration_login_link' => 'Registrasi di sini',
    'login_button' => 'Masuk!',
    'signup' => 'Daftar',
    'register' => 'Daftar!');
    return $lang[$txt];
}

?>
