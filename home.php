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
  require __DIR__.'/includes/interface.php';
  require __DIR__.'/includes/koneksi.php';
  if(!isset($_SESSION['username'])){
    header("location: index");
  }
  $username_session = $_SESSION["username"];
  $q = mysqli_query($conn_mysqli, "SELECT * FROM `$dbname`.`signup` WHERE username = '$username_session'");
  foreach($q as $hasil)
  var_dump($hasil);

  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= lang("project_name");?></title>
  <link rel="shortcut icon" href="<?= lang("favicon_path_files");?>" type="image/x-icon">
  <link rel="stylesheet" href="asset\vendor\bootstrap\css\bootstrap.min.css">
  <link rel="stylesheet" href="asset\css\style_fadhil.css">
  <script src="asset\vendor\jquery\jquery-3.2.1.min.js"></script>
  <script src="asset\vendor\bootstrap\js\popper.min.js"></script>
  <script src="asset\vendor\bootstrap\js\bootstrap.min.js"></script>
  <script src="asset\js\code.js"></script>
  <script type="text/javascript" src="asset\vendor\jquery\jquery.maxlength.js"></script>
  <script src="asset\vendor\jquery\jquery.form.min.js"></script>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #718791;">

    <a class="navbar-brand" href="#"><?= lang("project_name");?></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tentang</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Tutorial
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Tutorial HTML</a>
            <a class="dropdown-item" href="#">Tutorial CSS</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Tutorial Bootstrap</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link Mati</a>
        </li>
      </ul>

      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Cari">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
      </form>

    </div>

  </nav>
  <!-- ==============Write Post================== -->
  <center>
    <div class="write_post">
      <style type="text/css">
        #cancel_photo_preview {
          display: block;
          background: transparent;
          border: none;
          color: #ffffff;
          font-size: 21px;
          transition: color 0.3s;
          text-shadow: 1px 1px 8px rgb(0, 0, 0);
        }

        #photo_preview label {
          position: absolute;
          margin: 0;
          padding: 0;
          background: rgba(0, 0, 0, 0.46);
          left: 0;
          right: 0;
          top: 0;
          bottom: 0;
        }
      </style>
      <div class="post" style="text-align:left;direction: ltr">
        <table class="WritePostUserI">
          <tbody>
            <tr>
              <td style="width:50px;">
                <div class="username_OF_postImg"><img src="includes/upload/<?= $hasil['profile'];?>"></div>
              </td>
              <td style="padding: 10px 0px">
                <a><?= $hasil['fullname'];?></a><br>
                <span class="username_OF_postTime"><?= $hasil['username'];?></span>
              </td>
            </tr>
          </tbody>
        </table>
        <form id="postingToDB" action="includes\home_post.php" method="post" enctype="multipart/form-data"
          style="margin: 0;">
          <div id="w_text" class="wpost_tabcontent" style="display:block;padding: 0px">
            <textarea dir="auto" id="lang_rtl_ltr" class="post_textbox"
              placeholder="Share , post your ideas with our community" name="post_textbox"
              style="height:95px;overflow-y:hidden;text-align:left;"></textarea>
          </div>
          <div id="w_photo" class="wpost_tabcontent">
            <label>
              <input type="file" name="w_photo" accept="image/png, image/jpeg, image/jpeg"
                onchange="photoPreview(this);" style="display: none">
              <div id="photo_preview"
                style="margin-top: 10px;order: 1px solid rgba(0, 0, 0, 0.1);overflow: hidden;width: 100px;height: 100px;display:none;position: relative;">
                <label style="color: white">
                  <button type="reset" name="reset" id="cancel_photo_preview" style="display: none"><span
                      class="fa fa-times"></span></button>

                </label>
                <img id="photo_preview_src" src="#" alt="your image" style="height:100%;cursor: pointer;">
              </div>


              <div id="photo_preview_box"
                style="cursor: pointer;display:block;width:100px;height:100px;border:2px dashed rgba(78, 178, 255, 0.8);text-align:center;">
                <span class="fa fa-image"
                  style="    margin: 35%;font-size: 30px;color: rgba(78, 178, 255, 0.8);"></span>
              </div>
            </label>
          </div>
          
          <div>
            <ul class="wpost_tab">
              <li id="wt_text" style="float:left;">
                <button class="wpost_tablinks" onclick="wpost_tabs(event, 'w_text')"><span
                    style="color: cornflowerblue;margin: 0px 5px;" class="fa fa-pencil"></span> Write..</button>
              </li>
              <li id="wt_photo" style="float:left;">
                <button class="wpost_tablinks" onclick="wpost_tabs(event, 'w_photo')"><span
                    style="color: #4CAF50;margin: 0px 5px;" class="fa fa-camera"></span> Photo</button>
              </li>

              <li style="float:right;">
                <input class="default_flat_btn" type="submit" name="post_now" value="Post now"
                  style="margin: 5px;padding: 8px 10px;">
              </li>
              <li style="float:right;">
                <select id="p_privacy" style="margin: 5px; padding: 0px 10px; max-width: 110px; height: 35px;"
                  name="w_privacy">
                  <option selected="">Public</option>
                  <option>Followers</option>
                  <option> Only me</option>
                </select>
              </li>
            </ul>
          </div>
        </form>
        
      </div>
      <div id="getingNP"></div>
      

      <script type="text/javascript">
        function wpost_tabs(e, tabName) {
          e.preventDefault();
          switch (tabName) {
            case "w_text":
              $('#w_text').show();
              $('.post_textbox').focus();
              $('#w_photo').slideUp();
              $('#w_title').slideUp();
              break;
            case "w_photo":
              $('#w_photo').slideToggle(300);
              break;
            case "w_title":
              $('#w_title').slideToggle(300);
              break;
          }
        }

        $('#your_title').maxlength();
        function photoPreview(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
              $('#photo_preview_src').attr('src', e.target.result);
              $('#photo_preview_box').css({ "display": "none" });
              $('#photo_preview').css({ "display": "block" });
              $('#cancel_photo_preview').css({ "display": "block" });
            }

            reader.readAsDataURL(input.files[0]);
          } else {
            $('#photo_preview_box').css({ "display": "block" });
            $('#photo_preview').css({ "display": "none" });
            $('#cancel_photo_preview').css({ "display": "none" });
          }
        }
        $(document).ready(function () {
          $('#cancel_photo_preview').hide();
          $('#cancel_photo_preview').click(function () {
            $('#photo_preview').hide();
            $('#cancel_photo_preview').hide();
            $('#photo_preview_box').show();
          });
        });
        $('.post_textbox').each(function () {
          this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;text-align:' + "left;");
        }).on('input', function () {
          this.style.height = 'auto';
          this.style.height = (this.scrollHeight) + 'px';
        });
      </script>
    </div>
  </center>
</body>

</html>