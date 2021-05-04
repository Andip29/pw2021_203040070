<?php

    // Mengecek apakah ada id yang dikirimkan
    // jika tidak maka akan dikembalikan ke halaman index.php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

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
    <title>Document</title>

    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container" >
    <div class="image">
        <img src="../assets/img/<?= $pakaian["img"];?>" alt="">
        </div>
        <div class="keterangan">
        <p>Nama         : <?= $pakaian["nama"]; ?></p>
        <p>Stok         :<?= $pakaian["stok"]; ?></p>
        <p>Deskripsi    :<?= $pakaian["deskripsi"]; ?></p>
        <p>warna        :<?= $pakaian["warna"]; ?></p>
        <p>Size         :<?= $pakaian["ukuran"]; ?></p>
        <p>Harga        :<?= ubahRupiah($pakaian["harga"]) ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>