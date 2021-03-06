<?php
session_start();
require 'functions.php';
// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  // ambil username berdasarkan id
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = 'username'");
  $row = mysqli_fetch_assoc($result);
  
  // cek cookie dan username
  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}

// Login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username ='$username'");
  // mencocokan USERNAME dan PASSWORD
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['hash'] = hash('sha256', $row['id'], false);
        //jika remember me dicenetang
        if (isset($_POST['remember'])) {
          setcookie('username', $row['username'], time() + 60 * 60 * 24);
          $hash = hash('sha256', $row['id']);
          setcookie('hash', $hash, time() + 60 * 60 * 24 );
        }

    if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
    }
    header("Location: ../index.php");
    die;
  }
  }
  $error= true;
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

    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css2/style.css">

</head>
<body class="lgn">
<center><h3>Login</h3></center>
<div class="container">
<div class="row login">
    <form class="col s12" action="" method="post">
      <?php if (isset($error)) : ?>
          <p style="color: red; font-style: italic; ">Username atau Password salah</p>
      <?php endif; ?>

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
      <div class="remember">
      <p>
      <label>
        <input type="checkbox" name="remember"class="filled-in" checked="checked" />
        <span>Simpan Login</span>
      </label>
    </p
      </div>
      <div class="button">
      <button type="submit" name="submit">Login</button>
        </div>
      <div class="registrasi">
        <p>Daftar akun Registrasi <a href="registrasi.php">Disini</a></p>
      </div>
    </form>
  </div>
  </div>        
 <!--JavaScript at end of body for optimized loading-->
 <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
</body>
</html>
