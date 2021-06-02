<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$pakaian = query("SELECT * FROM pakaian");


if (isset($_GET['cari'])){
  $keyword = $_GET['keyword'];
  $pakaian = query("SELECT * FROM pakaian WHERE
            img LIKE '%$keyword%' OR
            nama LIKE '%$keyword%' OR
            deskripsi LIKE '%$keyword%' OR
            warna LIKE '%$keyword%' OR
            stok LIKE '%$keyword%' OR
            ukuran LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' ");
} else {
    $pakaian = query("SELECT * FROM pakaian");
}
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
      
    </style>
    <title>Latihan6a!</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    </head>

    <body>
    <div class="container">
    <div class="logout">
    <a class="waves-effect waves-light btn" href="logout.php">Logout</a>
   </div>
    <div class="kata"><h2>Data Barang</h2></div>

    <div class="add">
        <a href="tambah.php">Tambah Data Pakaian</a>
    </div>


      <form action="" method="get">
            <input type="text" name="keyword" autofocus placeholder="Telusuri..">
            <button type="submit" name="cari">cari!</button>
      </form>


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

<?php if (empty($pakaian)) : ?>
  <tr>
      <td colspan="7">
          <h1>Data tidak ditemukan</h1>
      </td>
  </tr>
<?php else : ?>

    <?php $i = 1 ?>
    <?php foreach($pakaian as $pkn) : ?>
    <tbody>
    <tr>
            <th><?= $i; ?></th>
            <td>
                <a href="ubah.php?id=<?= $pkn["id"]; ?>"><button>Ubah</button></a>
                <a href="hapus.php?id=<?= $pkn["id"]; ?>" onclick="return confirm('Hapus Data??');"><button>Hapus</button></a>
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
<?php endif; ?>
      </table>
      </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
    </body>
  </html>
