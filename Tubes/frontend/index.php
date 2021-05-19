<?php
  // menghubungkan dengan file php lainnya
  require '../backend/php/functions.php';

  // melakukan query
  $pakaian = query("SELECT * FROM pakaian")


?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../backend/assets/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <!-- css -->
      <link rel="stylesheet" href="css/style.css">

    <title>Tokolaris29</title>
    </head>

    <body>
    <!-- Navbar -->
    <div class="navbar-fixed">
    <nav class="teal darken-1">
    <div class="container">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Tokolaris29</a>
        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="../backend/php/login.php">Login</a></li>
          <li><a href="../backend/php/registrasi.php">Sign up</a></li>
          <li><a href="../../index.html"><i class="material-icons">reply_all</i></a></li>
        </ul>
      </div>
      </div>
    </nav>
  </div>

  <!-- sidenav -->
  <ul class="sidenav" id="mobile-nav">
     <li><a href="../backend/php/login.php">Login</a></li>
      <li><a href="../backend/php/registrasi.php">Sign up</a></li>
      <li><a href="../../.."><i class="material-icons">reply_all</i></a></li>
  </ul>

  <!-- slider -->
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/1.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="img/2.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      </ul>
      </div>

<section>
  <div class="container">
  <div class="row">
    <h3></h3>
    <div class="row">
    <?php foreach($pakaian as $pkn) : ?>
    <div class="col l3 m6 s12 ">
      <div class="card">
        <div class="card-image">
        <a href="detail.php?id=<?= $pkn['id']; ?>"><img src="../backend/assets/img/<?= $pkn['img']; ?>"></a>
          
        </div>
        <div class="card-content">
        <span class="card-title"><h6><?= $pkn['nama']; ?></h6></span>
          <p>Rp<?= $pkn['harga']; ?></p>
        </div>
        <div class="card-action">
        <a href="detail.php?id=<?= $pkn['id']; ?>">Lihat detail</a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  </div>       
  </div>
  </div>
</section>


  <!-- footer -->
  <footer class="page-footer teal darken-1 ">
          <div class="footer-copyright">
            <div class="container center text-accent-2">
            <h6>© 2021 by Priyandi Zembar Azizi</h6>
            </div>
          </div>
        </footer>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="../backend/assets/js/materialize.min.js"></script>

      <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
          indicators: false,
          height: 500,
          transition: 600,
          interval: 3000
        });

      </script>
    </body>
  </html>

