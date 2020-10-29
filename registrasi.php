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
session_start();
//call panggil file
require __DIR__.'/includes/interface.php';


if(isset($_SESSION['username'])) {
   header("location: home.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= lang("html_title_tag");?></title>
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
                        <?= lang("register")?>
                    </span>
                </div>

                <form class="login100-form validate-form" action="includes\register_auth.php" method="POST">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
                        <span class="label-input100"><?= lang("email_register");?></span>
                        <input class="input100" type="text" name="email"
                            placeholder="<?= lang("email_register_placeholder");?>">
                        <span class="focus-input100"></span>
                    </div>

                    <form class="login100-form validate-form" action="includes\register_auth.php" method="POST">
                        <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                            <span class="label-input100"><?= lang("email_register");?></span>
                            <input class="input100" type="text" name="username"
                                placeholder="<?= lang("label_username_placeholder");?>">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                            <span class="label-input100"><?= lang("label_username");?></span>
                            <input class="input100" type="text" name="username"
                                placeholder="<?= lang("label_username_placeholder");?>">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                            <span class="label-input100"><?= lang("label_password");?></span>
                            <input class="input100" type="password" name="password"
                                placeholder="<?= lang("label_password_placeholder");?>">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="flex-sb-m w-full p-b-30">


                            <div>
                                <a href="registrasi.php" class="txt1">
                                    <?= lang("registration_login_link");?>
                                </a>

                            </div>
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                <?= lang("login_button");?>
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

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?= lang("popup_Login_not_valid_modal_title");?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= lang("popup_Login_not_valid");?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <style>
        .img-modal {
            width: 100%;
            height: 100%;
        }
    </style>



</body>

</html>
<?php
if(isset($_GET['login'])){
    echo "
    <script>$('#exampleModal').modal({
        show: true
      })</script>
    ";
}

?>