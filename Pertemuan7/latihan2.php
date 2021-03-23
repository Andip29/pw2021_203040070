<?php
/*
* Priyandi Zembar Azizi
* 203040070
* https://github.com/Andip29/pw2021_203040070
* Pertemuan 7 - 18 Maret 2021
* Belajar Mengenai Get & Post
*/
?>

<?php
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) || 
    !isset($_GET["nrp"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["gambar"]) ){
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
    <li>
           <img src="img/<?= $_GET["gambar"]?>">
       </li>
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["nrp"]; ?></li>
    <li><?= $_GET["email"]; ?></li>
    <li><?= $_GET["jurusan"]; ?></li>
    </ul>

<a href="latihan1.php">kembali ke halaman 1</a>
</body>
</html>