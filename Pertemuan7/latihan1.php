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
// $_GET
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
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>