<?php
$fashion = [
    ["gambar" => "1.png" ,
    "nama" => "Baju Koko Aliyar Mustard",
    "deskripsi"=>"Dibuat dari bahan TOYOBO fodu, desain yang keren.",
    "harga" => "143000",
    "ukuran" => "S,M,L,XL,XXL",
    "stok" => "30"],

    ["gambar" => "2.png" ,
    "nama" => "Baju Koko Aliyar Hitam",
    "deskripsi"=>"Dibuat dari bahan TOYOBO fodu yang halus dan nyaman, desain yang keren dan detail",
    "harga" => "143000",
    "ukuran" => "S,M,L,XL,XXL",
    "stok" => "30"],
    
    ["gambar" => "3.png" ,
    "nama" => "Baju Koko Dzaky Hijau",
    "deskripsi"=>"Dibuat dari bahan OXFORD DENIM yang halus dan nyaman, dengan ketebalan kain yang pas dan warna misty.",
    "harga" => "129000",
    "ukuran" => "S,M,L,XL,XXL",
    "stok" => "30"],

    ["gambar" => "4.png" ,
    "nama" => "Baju Koko Dzaky Maroon",
    "deskripsi"=>"Dibuat dari bahan OXFORD DENIM yang halus dan nyaman, dengan ketebalan kain yang pas dan warna misty.",
    "harga" => "129000",
    "ukuran" => "S,M,L,XL,XXL",
    "stok" => "30"],

    ["gambar" => "5.jpg" ,
    "nama" => "Baju Koko Al Qarni Merah",
    "deskripsi"=>"Baju koko tangan panjang, detail variasi di kerah, kancing dan tangan.",
    "harga" => "150000",
    "ukuran" => "S,M,L,XL,XXL",
    "stok" => "30"],

    ["gambar" => "6.jpg" ,
    "nama" => "Baju Koko Al Qarni Putih",
    "deskripsi"=>"Baju koko tangan panjang, detail variasi di kerah, kancing dan tangan.",
    "harga" => "150000",
    "ukuran" => "S,M,L,XL,XXL",
    "stok" => "30"],

    ["gambar" => "7.jpg" ,
    "nama" => "Baju Koko Al Faruq Merah",
    "deskripsi"=>"Bahan Oxford Saku samping kanan kiri dan dada Kancing Depan Scoder Lengan Aksen bahan swed mewah.",
    "harga" => "130000",
    "ukuran" => "S,M,L,XL,XXL",
    "stok" => "30"],

    ["gambar" => "8.jpg" ,
    "nama" => "Baju Koko Al Faruq Biru",
    "deskripsi"=>"Bahan Oxford Saku samping kanan kiri dan dada Kancing Depan Scoder Lengan Aksen bahan swed mewah.",
    "harga" => "130000",
    "ukuran" => "S,M,L,XL,XXL",
    "stok" => "30"],

    ["gambar" => "9.jpg" ,
    "nama" => "Baju Koko Umar Merah",
    "deskripsi"=>"Dibuat dari bahan Olivia yang halus dan nyaman, dengan ketebalan kain yang pas dan warna yg mencolok dengan Kualitas Premium.",
    "harga" => "105000",
    "ukuran" => "S,M,L,XL,XXL",
    "stok" => "30"],

    ["gambar" => "10.jpg" ,
    "nama" => "Baju Koko Fatih Pink",
    "deskripsi"=>"Dibuat dari bahan 3 in 1 yang halus dan nyaman, dengan ketebalan kain yang pas dan warna muda dengan Kualitas Premium.",
    "harga" => "105000",
    "ukuran" => "S,M,L,XL,XXL",
    "stok" => "30"],

];

function ubahRupiah($angka){
    return "Rp" . number_format($angka,2,',','.');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <style>
        .kata {
            text-align: center;
        }
    </style>
    <title>Latihan3e!</title>
  </head>
  <body>
  
  <div class="container">
  <div class="kata"><h2>Data Barang</h2></div>
  <table class="table">
  <thead>
    <tr class="table-dark">
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">Stok Barang</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Ukuran</th>
      <th scope="col">Harga</th>
      
    </tr>
  </thead>
  <?php $sn=1; foreach( $fashion as $fsh) : ?>
  <tbody>

 
    <tr>
            <th><?= $sn; ?></th>
            <td><figure class="image is-128x128">
                                <img src="asset/img/<?= $fsh["gambar"]; ?>" alt="">
                            </figure></td>
            <td><?= $fsh['nama']; ?></td>
            <td><?= $fsh['stok']; ?></td> 
            <td><?= $fsh['deskripsi']; ?></td> 
            <td><?= $fsh['ukuran']; ?></td> 
            <td><?= ubahRupiah($fsh["harga"]) ?></td>  
    </tr>
  </tbody>
  <?php $sn=$sn+1; endforeach; ?>
</table>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="asset/js/jquery.js"></script>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->

  </body>
</html>