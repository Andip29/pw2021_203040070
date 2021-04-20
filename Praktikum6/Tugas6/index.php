<?php
  // menghubungkan dengan file php lainnya
  require 'php/functions.php';

  // melakukan query
  $pakaian = query("SELECT * FROM pakaian")


?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>
        .judul {
            font-size: 20px;
          font-weight: bold;
        }
        .card {
          width: 18rem;
        }
    </style>
    <title>index</title>
    </head>

    <body>
    <div class="container">
    <div class="login">
        <a class="waves-effect waves-light btn" href="php/login.php">
            <button type=""></button>Masuk ke halaman admin
        </a>
    </div>
    <div class="row">
    <div class="col s12 m6">
      <div class="card red darken-1  ">
        <div class="card-content white-text">
          <span class="card-title">Nama Barang</span>
          <?php foreach($pakaian as $pkn) : ?>
        <ul class="nama" id='dropdown1' class='dropdown-content'>
            <li>
            <a href="php/detail.php?id=<?= $pkn['id'] ?>">
                <?= $pkn["nama"] ?>
                </a>
                </li>
            </ul>
    <?php endforeach; ?>
      </div>
    </div>
  </div>
  </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    </body>
  </html>

