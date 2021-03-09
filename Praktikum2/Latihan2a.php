<?php
/*
Priyandi Zembar Azizi
203040070
https://github.com/Andip29/pw2021_203040070
Praktikum 2 - 5 Maret 2021
Tugas mengenai function
*/
?>

<?php 
    function gantiStyle($tulisan, $style1, $style2){
        return "<div class=\"$style1 $style2\">$tulisan</div>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2a</title>
    <style>
        .styleTulisan{
            font-size: 28px;
            font-family: Arial, Helvetica, sans-serif;
            color: #8c782d;
            font-style: italic;
            font-weight: bold;
        }
        .border{
            border: 1px solid black;
            box-shadow: 0 0 5px rgba(0, 0, 0, 10);
            width: 500px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php echo gantiStyle("Selamat datang di praktikum PW", "styleTulisan", "border") ?>
</body>
</html>

