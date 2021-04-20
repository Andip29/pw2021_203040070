<?php
require 'functions.php';

if(isset($_POST["register"])) {
    
    if(registrasi($_POST) > 0) {
        echo "
                <script>
                    alert('Registrasi Berhasil!');
                    document.location.href = 'login.php';
                </script>";
    } else {
        echo "<script>
                    alert('Registrasi Gagal!');
                </script>";
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>

    <title>Registrasi</title>
    <link rel="stylesheet" type="text/css" href="../css2/style.css">

</head>
<body class="lgn">
<center><h3>Registrasi</h3></center>
<div class="container">
<div class="row register">
    <form class="col s12" action="" method="post">
      <div class="row">
        <div class="input-field col s12">
            <label for="username">Username</label><br>
            <input type="text" name="username" id="username">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <label for="password2">Konfirmasi Password</label><br>
            <input type="password" name="password2" id="password2">
        </div>
      </div>
      <div class="button">
      <button type="submit" name="register">REGISTER</button>
        </div>
    </form>
  </div>
  </div>        
 <!--JavaScript at end of body for optimized loading-->
 <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
</body>
</html>
