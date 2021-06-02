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
$jawabanIsset = "Isset adalah = Fungsi yang digunakan untuk memeriksa suatu variabel ada nilainya atau tidak null, Isset akan mengembalikan nilai true ketika variabel tidak null<br><br>";
$jawabanEmpty = "Empty adalah = Fungsi yang digunakan untuk memeriksa apakah variabel yang diberikan kosong atau tidak, Empty akan mengembalikan nilai true ketika variabelnya kosong";

function soal($style){
    return "<div class=\"$style\">".$GLOBALS['jawabanIsset'] .$GLOBALS['jawabanEmpty'] ."</div>";
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .border{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            border: 1px solid black;
            box-shadow: 0 0 5px rgba(0, 0, 0, 10);
            width: fit-content;
            padding: 10px;
            font-size: 15px;
        }
    </style>
</head>
<body>   
<?php echo soal("border")?>
</body>
</html>