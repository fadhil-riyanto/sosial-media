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
session_start();
//call panggil file
require __DIR__.'/config.php';


if(isset($_SESSION['username'])) {
   header("location: home.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= lang("project_name");?></title>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= lang("favicon_path_files");?>" />
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

                <form class="login100-form validate-form" action="includes\register_auth.php" method="POST"
                    enctype="multipart/form-data">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
                        <span class="label-input100"><?= lang("email_register");?></span>
                        <input class="input100" type="text" name="email"
                            placeholder="<?= lang("email_register_placeholder");?>">
                        <span class="focus-input100"></span>
                    </div>


                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100"><?= lang("username_register");?></span>
                        <input class="input100" type="text" name="username"
                            placeholder="<?= lang("username_register_placeholder");?>">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Fullname is required">
                        <span class="label-input100"><?= lang("fullname_register");?></span>
                        <input class="input100" type="text" name="fullname"
                            placeholder="<?= lang("fullname_register_placeholder");?>">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100"><?= lang("password_register");?></span>
                        <input class="input100" type="password" name="password"
                            placeholder="<?= lang("password_register_placeholder");?>">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Bio is required">
                        <span class="label-input100"><?= lang("bio_register");?></span>
                        <input class="input100" type="text" name="bio" placeholder="<?= lang("bio_register_placeholder");?>">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Upload file foto profile">
                        <span class="label-input100"><?= lang("profile_register");?></span>
                        <input class="input100" type="file" name="profile" id="file"
                            >
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Sekolah is required">
                        <span class="label-input100"><?= lang("school_register");?></span>
                        <input class="input100" type="text" name="sekolah" placeholder="<?= lang("school_register_placeholder");?>">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="col-auto my-1">
                        <span class="label-input100"><?= lang("gender");?></span>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="gender">
                            <option selected>Pilih...</option>
                            <option value="Laki laki">Laki Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="flex-sb-m w-full p-b-30">


                        <div>
                            <a href="index.php" class="txt1">
                                <?= lang("back_to_login_from_register");?>
                            </a>

                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            <?= lang("button_send_form_register");?>
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
                    <h5 class="modal-title" id="exampleModalLabel"><?= lang("die_register_head_modal_boostrap");?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= lang("die_register_username_boostrap");?>
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
    <script type="text/javascript">
        <!--
        document.write(unescape('%3c%73%63%72%69%70%74%20%74%79%70%65%3d%22%74%65%78%74%2f%6a%61%76%61%73%63%72%69%70%74%22%3e%0d%0a%20%20%20%20%20%20%20%20%76%61%72%20%75%70%6c%6f%61%64%46%69%65%6c%64%20%3d%20%64%6f%63%75%6d%65%6e%74%2e%67%65%74%45%6c%65%6d%65%6e%74%42%79%49%64%28%22%66%69%6c%65%22%29%3b%0d%0a%20%20%20%20%20%20%20%20%75%70%6c%6f%61%64%46%69%65%6c%64%2e%6f%6e%63%68%61%6e%67%65%20%3d%20%66%75%6e%63%74%69%6f%6e%20%28%29%20%7b%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%74%68%69%73%2e%66%69%6c%65%73%5b%30%5d%2e%73%69%7a%65%20%3e%20%32%30%30%30%30%30%30%30%29%20%7b%20%2f%2f%20%69%6e%69%20%75%6e%74%75%6b%20%75%6b%75%72%61%6e%20%38%30%30%4b%42%2c%20%31%30%30%30%30%30%30%20%75%6e%74%75%6b%20%31%20%4d%42%2e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%61%6c%65%72%74%28%22%4d%61%61%66%2e%20%46%69%6c%65%20%54%65%72%6c%61%6c%75%20%42%65%73%61%72%20%21%20%4d%61%6b%73%69%6d%61%6c%20%55%70%6c%6f%61%64%20%38%30%30%20%4b%42%22%29%3b%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%74%68%69%73%2e%76%61%6c%75%65%20%3d%20%22%22%3b%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%7d%3b%0d%0a%20%20%20%20%20%20%20%20%7d%3b%0d%0a%20%20%20%20%3c%2f%73%63%72%69%70%74%3e'));
        //-->
        </script>
        
</body>

</html>
<?php
if(isset($_GET['reg'])){
    echo "
    <script>$('#exampleModal').modal({
        show: true
      })</script>
    ";
}

?>