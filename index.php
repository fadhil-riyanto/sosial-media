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
session_start();
if (isset($_SESSION['username'])) {
   header("Location : home");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="includes/login_auth.php" method="post"></form>
</body>
</html>