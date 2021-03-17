<?php
$pemain =[ 
        ["nama" => "Cristiano Ronaldo" ,
        "club" => "Juventus",
        "main"=>"100",
        "gol" => "76",
        "assist" => "30"],
        ["nama" =>"Lionel Messi",
        "club" => "Barcelona",
        "main"=>"110",
        "gol" => "80",
        "assist" => "12"],
        ["nama" => "Luca Modric",
        "club" => "Real Madrid",
        "main"=>"87",
        "gol" => "12",
        "assist" => "48"],
        ["nama" => "Mohammad Salah",
        "club" => "Liverpool",
        "main"=>"90",
        "gol" => "103",
        "assist" => "8"],
        ["nama" => "Neymar jr",
        "club" => "Paris Saint Germain",
        "main"=>"109",
        "gol" => "56",
        "assist" => "15"],
        ["nama" => "Sadio Mane",
        "club" => "Liverpool",
        "main"=>"62",
        "gol" => "30",
        "assist" => "70"],
        ["nama" => "Zlatan Ibrahimovic",
        "club" => "Ac Milan",
        "main"=>"100",
        "gol" => "10",
        "assist" => "12"]
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
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }

    </style>
</head>
<body>
    <div class="container">
    <div class="kata"><p>Daftar Pemain Bola Terkenal</p></div>
    <table border="1px solid black" cellpadding="5" cellspacing="0" align="center">
        <tr>
            <td><?= "NO" ?></td>
            <td><?= "NAMA" ?></td>
            <td><?= "CLUB" ?></td>
            <td><?= "MAIN" ?></td>
            <td><?= "GOL" ?></td>
            <td><?= "ASSIST" ?></td>
        </tr>
        <?php $sn=1; foreach( $pemain as $pmn) : ?>
            
        <tr>
            <td><?= $sn; ?></td>
            <td><?= $pmn['nama']; ?></td>
            <td><?= $pmn['club']; ?></td>
            <td><?= $pmn['main']; ?></td> 
            <td><?= $pmn['gol']; ?></td> 
            <td><?= $pmn['assist']; ?></td>  
        </tr>
        <?php $sn=$sn+1; endforeach; ?>
        <?php
        $total = array_sum(array_column($pemain, 'main'));
        $total2 = array_sum(array_column($pemain, 'gol'));
        $total3 = array_sum(array_column($pemain, 'assist'));
        ?>
        <tr>
            <td><?= "#" ?></td>
            <td colspan="2"><?= "Jumlah" ?></td>
            <td><?= $total ?></td>
            <td><?= $total2 ?></td>
            <td><?= $total3 ?></td>
        </tr>
    </table>
    </div>
</body>
</html>