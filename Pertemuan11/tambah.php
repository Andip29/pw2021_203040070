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

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data BERHASIL ditambahkan');
            document.location.href = 'index.php';
         </script>";
  } else {
    echo "data GAGAL ditambahkan!";
  }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah data Mahasiswa</title>
  <style>
    form {
      text-align: left;
    }
  </style>
</head>

<body>
  <h3>Form tambah data mahasiswa</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required>
        </label>
      </li>
      <br></br>
      <li>
        <label>
          NRP :
          <input type="text" name="nrp" required>
        </label>
      </li>
      <br></br>
      <li>
        <label>
          Email :
          <input type="text" name="email" required>
        </label>
      </li>
      <br></br>
      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" required>
        </label>
      </li>
      <br></br>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required>
        </label>
      </li>
      <br></br>
      <li>
        <button type="submit" name="tambah">Tambah Data!</button>
      </li>
    </ul>
  </form>
</body>

</html>