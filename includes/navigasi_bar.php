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