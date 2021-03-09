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
    function hitungDeterminan($w,$x,$y,$z){
        // baris code perhitungan determinan
        $matriks = ($w * $z) - ($x * $y);

        echo "<table style='border-left: 2px solid black; border-right: 2px solid black;' cellspacing='5' cellpadding='5'>
                 <tr>
                    <td>$w<td>
                    <td>$x<td>
                </tr>
                <tr>
                    <td>$y<td>
                    <td>$z<td>
                </tr>
        </table>";
        echo "<div class=\"font\">Determinan dari matriks tersebut adalah $matriks</div>"; // menampilkan Teks dibawah matriks
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2d PHP</title>
    <style>
        .font{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php hitungDeterminan(1,2,3,4)?>
</body>
</html>