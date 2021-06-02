<?php 
require 'functions.php';

$id = $_GET["id"];
$pkn = query("SELECT * FROM pakaian WHERE id = $id")[0];

if (isset($_POST["ubah"])) {
    if(ubah($_POST) > 0) {
        echo "
                <script>
                    alert('Data Berhasil diubah!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data gagal diubah!');
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

    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css2/style.css">

</head>
<body class="bgt">
<center><h3>Form Ubah Data Pakaian</h3></center>
<div class="container">
<div class="row tambah">
    <form class="col s12" action="" method="post">
    <input type="hidden" name="id" id="id" value="<?= $pkn["id"]; ?>">
    
      <div class="row">
        <div class="input-field col s12">
            <label for="img">Image</label><br>
            <input type="text" name="img" id="img" required value="<?= $pkn["img"]; ?>"><br><br>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <label for="nama">Nama</label><br>
            <input type="text" name="nama" id="nama" required value="<?= $pkn["nama"]; ?>"><br><br>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <label for="deskripsi">Deskripsi</label><br>
            <input type="text" name="deskripsi" id="deskripsi" required value="<?= $pkn["deskripsi"]; ?>"><br><br>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <label for="warna">Warna</label><br>
            <input type="text" name="warna" id="warna" required value="<?= $pkn["warna"]; ?>"><br><br>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <label for="stok">Stok</label><br>
            <input type="text" name="stok" id="stok" required value="<?= $pkn["stok"]; ?>"><br><br>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <label for="ukuran">Ukuran</label><br>
            <input type="text" name="ukuran" id="ukuran" required value="<?= $pkn["ukuran"]; ?>"><br><br>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <label for="harga">Harga</label><br>
            <input type="text" name="harga" id="harga" required value="<?= $pkn["harga"]; ?>"><br><br>
        </div>
      </div>
      <div class="button">
      <button type="submit" name="ubah">Ubah Data!</button>
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
