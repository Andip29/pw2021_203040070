<?php
/*
* Priyandi Zembar Azizi
* 203040070
* https://github.com/Andip29/pw2021_203040070
* Pertemuan 5 - 24 Februari 2021
* Belajar ARRAY
*/
?>
// array
// variabel yang dapat memiliki banyak nilai
// element pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari nol

// membuat array 
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// menampilkan Array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// menampilkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat"
var_dump($hari);
?>