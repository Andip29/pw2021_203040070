<?php
// Melakukan koneksi ke database
$conn = mysqli_connect("localhost", "pw20070", "#Akun#203040070#");

// Memilih Database
mysqli_select_db($conn, "pw20070_pw_tubes_203040070");

// Melakukan Querry dari database
$result = mysqli_query($conn, "SELECT * FROM pakaian");

function ubahRupiah($angka){
    return "Rp" . number_format($angka,2,',','.');
}
?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <link rel="stylesheet" href="css/style.css">
    <title>Latihan3e!</title>
    </head>

    <body>
    <div class="container">
    <div class="kata"><h2>Data Barang</h2></div>
    <table>
    <thead>
        <tr >
            <th >#</th>
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
    <?php while($row = mysqli_fetch_assoc($result)) : ?>
    <tbody>
    <tr>
            <th><?= $i; ?></th>
            <td><figure class="image is-128x128">
                                <img src="assets/img/<?= $row["img"]; ?>" alt="">
                            </figure></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["stok"]; ?></td> 
                <td><?= $row["deskripsi"]; ?></td> 
                <td><?= $row["warna"]; ?></td> 
                <td><?= $row["ukuran"]; ?></td> 
                <td><?= ubahRupiah($row["harga"]) ?></td>  
        </tr>
     </tbody>
     <?php $i++ ?>
    <?php endwhile; ?>
      </table>
      </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    </body>
  </html>

