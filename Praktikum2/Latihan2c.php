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
    function tumpukanBola($tumpukan) {
        for( $i = 1; $i <= $tumpukan; $i++ ) { 
            for($j =1; $j <= $i; $j++) {
              echo "<div class=\"bola\"> $i </div>";
            }
            echo "<br>";
        }
    }
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
      .bola {
          width: 50px;
          height: 50px;
          background-color: salmon;
          text-align: center;
          line-height: 50px;
          margin: 3px;
          border-radius: 100%;
          display: inline-block;
      } 

  </style>
</head>
<body>
  
  <?php tumpukanBola(5) ?>
</body>
</html>