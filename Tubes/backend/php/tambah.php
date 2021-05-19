<?php 
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

if (isset($_POST["tambah"])) {
    if(tambah($_POST) > 0) {
        echo "
                <script>
                    alert('Data Berhasil ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data gagal ditambahkan!');
                    document.location.href = 'admin.php';
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

    <title>Tambah</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

</head>
<body class="bgt">
<center><h3>Form Tambah Data Pakaian</h3></center>
<div class="container">
<div class="row tambah">
    <form class="col s12" action="" method="post">
      <div class="row">
        <div class="input-field col s12">
            <label for="img">Image</label><br>
            <input type="text" name="img" id="img" required><br><br>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <label for="nama">Nama</label><br>
            <input type="text" name="nama" id="nama" required><br><br>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <label for="deskripsi">Deskripsi</label><br>
            <input type="text" name="deskripsi" id="deskripsi" required><br><br>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <label for="warna">Warna</label><br>
            <input type="text" name="warna" id="warna" required><br><br>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <label for="stok">Stok</label><br>
            <input type="text" name="stok" id="stok" required><br><br>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <label for="ukuran">Ukuran</label><br>
            <input type="text" name="ukuran" id="ukuran" required><br><br>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <label for="harga">Harga</label><br>
            <input type="text" name="harga" id="harga" required><br><br>
        </div>
      </div>
      <div class="button">
      <button type="submit" name="tambah">Tambah Data!</button>
        <button type="submit">
            <a href="admin.php" style="text-decotration: none; color: black;">Kembali</a>
        </button>
        </div>
    </form>
  </div>
  </div>        
 <!--JavaScript at end of body for optimized loading-->
 <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
</body>
</html>
