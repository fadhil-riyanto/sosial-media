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
require_once __DIR__.'/../config.php';

$servername = $server_fadhil;
$username = $username_db_fadhil;
$password = $password_db_fadhil;
$dbname = $dbname_db_fadhil;

$conn_mysqli = mysqli_connect($servername, $username, $password, $dbname);