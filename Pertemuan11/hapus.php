<?php
/*
Priyandi Zembar Azizi
203040070
https://github.com/Andip29/pw2021_203040070
Pertemuan 11 - (30 APRIL 2021)
Materi pertemuan 11 mengenai ubah data, hapus data & searching
*/
?>
<?php
require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// mengambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
          alert('data berhasil dihapus');
          document.location.href = 'index.php';
       </script>";
} else {
  echo "data gagal ditambahkan!";
}