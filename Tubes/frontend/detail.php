<?php

    // Mengecek apakah ada id yang dikirimkan
    // jika tidak maka akan dikembalikan ke halaman index.php
    if (!isset($_GET['id'])) {
        header("location: ../backend/php/index.php");
        exit;
    }

    require '../backend/php/functions.php';

    // Mengambil id dari url
    $id = $_GET['id'];

    // melakukan query dengan parameter id yang diambil dari url
    $pakaian = query("SELECT * FROM pakaian WHERE id = $id")[0];

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../backend/assets/css/materialize.min.css"  media="screen,projection"/>

      <!-- css -->
      <link rel="stylesheet" href="../css/style.css">

    <title>Document</title>
</head>
<body>

<!-- Navbar -->
<div class="navbar-fixed">
    <nav class="teal darken-1">
    <div class="container">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Tokolaris29</a>
        <a href="index.php" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">reply_all</i></a>
        <ul class="right hide-on-med-and-down">
        <li><a href="../backend/php/login.php">Login</a></li>
          <li><a href="../backend/php/registrasi.php">Sign up</a></li>
          <li><a href="index.php"><i class="material-icons">reply_all</i></a></li>
        </ul>
      </div>
      </div>
    </nav>
  </div>
  
<section>
<div class="container ">
        <div class="detail">
            <h2 class="header center">Detail Product</h2>
            <div class="card horizontal">
                <div class="card-image">
                <img src="../backend/assets/img/<?= $pakaian["img"];?>" alt="">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p><b>Nama Produk :</b> <br><?= $pakaian["nama"]; ?></p>
                        <p><b>Stok :</b> <br><?= $pakaian["stok"]; ?></p>
                        <p><b>Deskripsi :</b> <br><?= $pakaian["deskripsi"]; ?></p>
                        <p><b>Warna :</b> <br><?= $pakaian["warna"]; ?></p>
                        <p><b>Ukuran:</b> <?= $pakaian["ukuran"]; ?></p>
                        <p><b>Harga :</b> <br><?= ubahRupiah($pakaian["harga"]) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>   

<!-- footer -->
  <footer class="page-footer teal darken-1 detail">
          <div class="footer-copyright">
            <div class="container center text-accent-2">
            <h6>© 2021 by Priyandi Zembar Azizi</h6>
            </div>
          </div>
        </footer>
     <!--JavaScript at end of body for optimized loading-->
     <script type="text/javascript" src="../backend/assets/js/materialize.min.js"></script>

</body>
</html>