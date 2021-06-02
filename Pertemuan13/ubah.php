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

// Ambil id dari URL
$id = $_GET['id'];

// Query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
         </script>";
  } else {
    echo "data gagal diubah!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiswa</title>
</head>


<body>
  <h3>Form Ubah Data Mahasiswa</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $m['id']; ?>">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required value="<?= $m['nama']; ?>">
        </label>
      </li>
      <br>
      <li>
        <label>
          NRP :
          <input type="text" name="nrp" required value="<?= $m['nrp']; ?>">
        </label>
      </li>
      <br>
      <li>
        <label>
          Email :
          <input type="text" name="email" required value="<?= $m['email']; ?>">
        </label>
      </li>
      <br>
      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" required value="<?= $m['jurusan']; ?>">
        </label>
      </li>
      <br>
      <li>
        <input type="hidden" name="gambar_lama" value="<?= $m['gambar']; ?>">
        <label>
          Gambar :
          <input type="file" name="gambar" class="gambar" onchange="previewImage()">
        </label>
        <img src="img/<?= $m['gambar']; ?>" width="150" style="display: block; margin-top: 5px;" class="img-preview">
      </li>
      <br>
      <li>
        <button type="submit" name="ubah">Ubah Data!</button>
      </li>
    </ul>
  </form>
  <script src="js/script.js"></script>
</body>

</html>

</html>