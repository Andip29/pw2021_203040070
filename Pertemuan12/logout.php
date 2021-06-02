<?php
/*
Priyandi Zembar Azizi
203040070
https://github.com/Andip29/pw2021_203040070
Pertemuan 12 - (30 APRIL 2021)
Materi pertemuan 12 menambahkan fitur login dan registrasi
*/
?>
<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
?>