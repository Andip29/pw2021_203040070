<?php
$pemain =[ 
        ["nama" => "Cristiano Ronaldo" ,
        "club" => "Juventus"],
        ["nama" =>"Lionel Messi",
        "club" => "Barcelona"],
        ["nama" => "Luca Modric",
        "club" => "Real Madrid"],
        ["nama" => "Mohammad Salah",
        "club" => "Liverpool"],
        ["nama" => "Neymar jr",
        "club" => "Paris Saint Germain"],
        ["nama" => "Sadio Mane",
        "club" => "Liverpool"],
        ["nama" => "Zlatan Ibrahimovic",
        "club" => "Ac Milan"]
];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kata {
            font-size: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    
    <div class="kata"><p>Daftar Pemain Bola Terkenal</p></div>
    <table>
        <?php foreach( $pemain as $pmn) : ?>
        <tr>
            <td><?= $pmn['nama']; ?></td>
            <td><?= ":";?></td> 
            <td><?= $pmn['club']; ?></td> 
        </tr>
        <?php endforeach; ?>
    
    </table>
</body>
</html>