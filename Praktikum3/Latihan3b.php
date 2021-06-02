<?php
$nama = ["Mesut Ozil", "Cristiao Ronaldo", "Lionel Messi", "Karim Benzema", "Lewandowski"]
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
    <ol>
        <?php foreach( $nama as $key) : ?>
            <li><?= $key; ?></li> 
        <?php endforeach; ?>
    </ol>
    <?php
    $nama_baru = array_push($nama,"Neymar jr", "Hulk");
    $nama_baru = sort($nama);
     
    ?>
    <div class="kata"><p>Daftar Pemain Bola Terkenal Baru</p></div>
    <ol>
            <?php foreach( $nama as $nam) : ?>
                <li><?= $nam; ?></li>
            <?php endforeach; ?>
    </ol>
</body>
</html>