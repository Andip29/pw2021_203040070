<?php
/*
* Priyandi Zembar Azizi
* 203040070
* https://github.com/Andip29/pw2021_203040070
* Pertemuan 4 - 18 Februari 2021
* Mempelajari Function
*/
?>

<?php 
// Date
// Untuk menampiljan tanggal dalam format tertentu
// echo date("l, d-M-y");

// Time
// Unix Timetamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// echo date("l", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l" ,mktime(0,0,0,6,29,2001));

// strtotime
echo date("l", strtotime("25 jun 2001"));




?>