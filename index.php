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
//call panggil file
require __DIR__.'/includes/bahasa_indonesia.php';
require __DIR__.'/includes/interface.php';
if(isset($_SESSION['username'])) {
   header("location: home");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title_tag?></title>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="asset/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/css/util.css">
    <link rel="stylesheet" type="text/css" href="asset/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
                    <span class="login100-form-title-1">
                        <?= lang("signup")?>
                    </span>
                </div>

                <form class="login100-form validate-form" action="includes\login_auth.php" method="POST">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="username" placeholder="Enter username">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="Enter password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-30">


                        <div>
                            <a href="registrasi" class="txt1">
                                Registration here
                            </a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>

                    </div>

            </div>
            </form>
        </div>
    </div>
    </div>

    <!--===============================================================================================-->
    <script src="asset/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="asset/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="asset/vendor/bootstrap/js/popper.js"></script>
    <script src="asset/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="asset/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="asset/vendor/daterangepicker/moment.min.js"></script>
    <script src="asset/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="asset/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="asset/js/main.js"></script>

</body>

</html>
<?php
if(isset($_GET['login'])){
    echo "Gagal";
}

?>