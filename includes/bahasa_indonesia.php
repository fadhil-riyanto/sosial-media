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
    static $lang = array(
    // home page
    'login' => 'Masuk',
    'signup' => 'Daftar',
    'button_login' => 'Login',
    'button_register' => 'Daftar!',
    'username_not_exists' => 'User name not exists! No User name like that you entered',
    'friends' => 'Friedns',
    'requests' => 'Requests',
    'continue_reading' => 'Continue reading',


   // ==========================================

    );
    return $lang[$txt];
}

?>

?>