<?php
/*
Priyandi Zembar Azizi
203040070
https://github.com/Andip29/pw2021_203040070
Pertemuan 13 - (12 05 2021)
Materi pertemuan 13 menambah fitur ajax dan upload gambar
*/
?>

<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// Jika tidak ada id di URL
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// Mengambil id dari URL
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
          alert('data BERHASIL dihapus');
          document.location.href = 'index.php';
       </script>";
} else {
  echo "data GAGAL dihapus!";
}