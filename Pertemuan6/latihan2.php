<?php
/*
* Priyandi Zembar Azizi
* 203040070
* https://github.com/Andip29/pw2021_203040070
* Pertemuan 6 - 05 Maret 2021
* Belajar Associative ARRAY
*/
?>

<?php
$mahasiswa = [
    [
        "nama" => "Priyandi Zembar Azizi",
        "nrp" => "203040070", 
        "email" => "priyandi.zembarazizi@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "2.jpg"
    ],
    [
        "nama" => "kiki saepul", 
        "nrp" => "203040900", 
        "email" => "kiki@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "1.jpg"
    ]
];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
   <ul>
       <li>
           <img src="img/<?= $mhs["gambar"]?>">
       </li>
       <li>Nama : <?= $mhs["nama"] ?></li>
       <li>NRP : <?= $mhs["nrp"] ?></li>
       <li>Email : <?= $mhs["jurusan"] ?></li>
       <li>Jurusan : <?= $mhs["email"] ?></li>
   </ul>
   <?php endforeach; ?>
</body>
</html>
