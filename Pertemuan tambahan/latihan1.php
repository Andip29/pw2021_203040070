<?php 
// echo 'Mulai <br>';

// for
// for ($i = 1; $i <= 3; $i++) {
//     // echo "Hello World $i kali <br>";
//     echo 'Hello World ' . $i . ' kali <br>';
// }

// while
// $i = 1;
// while ($i <= 10) {
//   echo "Hello World $i kali <br>";
// $i++;
// }

// for ($i=3; $i > 0; $i--){
//     echo "Hello World $i kali <br>";
// }

// echo 'Selesai!';

// Nested Loop / Pengulangan Bersarang / Looping di dalam Looping
// for($i = 5; $i > 0; $i--) { // pengulangan baris
//     for ($y = 1; $y <= $i; $y++) { // pengulangan angka
//         echo $i;
//     }
//     echo "<br>";
// }

// 55555
// 4444
// 333
// 22
// 1


for($i = 1; $i <= 5; $i++) { 
  for ($y = 1; $y <= $i; $y++) { 
      echo $i;
  }
  echo "<br>";
}

// 11111
// 2222
// 333
// 22
// 5


?>