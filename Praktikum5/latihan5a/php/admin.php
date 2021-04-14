<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$pakaian = query("SELECT * FROM pakaian");

?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>
        .kata {
            text-align: center;
        }
    </style>
    <title>Latihan5a!</title>
    </head>

    <body>
    <div class="container">
    <div class="kata"><h2>Data Barang</h2></div>
    <table>
    <thead>
        <tr >
            <th >#</th>
            <th >opsi</th>
            <th >Gambar</th>
            <th >Nama</th>
            <th >Stok Barang</th>
            <th >Deskripsi</th>
            <th >Warna</th>
            <th >Ukuran</th>
            <th >Harga</th>
      
    </tr>
    </thead>

    <?php $i = 1 ?>
    <?php foreach($pakaian as $pkn) : ?>
    <tbody>
    <tr>
            <th><?= $i; ?></th>
            <td>
                <a href=""><button>Ubah</button></a>
                <a href=""><button>Hapus</button></a>
            </td>
            <td><figure class="image is-128x128">
                                <img src="../assets/img/<?= $pkn["img"]; ?>" alt="">
                            </figure></td>
                <td><?= $pkn["nama"]; ?></td>
                <td><?= $pkn["stok"]; ?></td> 
                <td><?= $pkn["deskripsi"]; ?></td> 
                <td><?= $pkn["warna"]; ?></td> 
                <td><?= $pkn["ukuran"]; ?></td> 
                <td><?= ubahRupiah($pkn["harga"]) ?></td>  
        </tr>
     </tbody>
     <?php $i++ ?>
    <?php endforeach; ?>
      </table>
      </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
    </body>
  </html>
