<?php
// fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "pw20070", "#Akun#203040070#");
    mysqli_select_db($conn, "pw20070_pw_tubes_203040070");

    return $conn;
}

// function untuk melakukan query dan memasukkannya kedalam array
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function ubahRupiah($angka){
    return "Rp" . number_format($angka,2,',','.');
}

// function untuk menambahkan data dalam database
function tambah($data)
{
    $conn = koneksi();

    $img = htmlspecialchars($data['img']);
    $nama = htmlspecialchars($data['nama']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $warna = htmlspecialchars($data['warna']);
    $stok = htmlspecialchars($data['stok']);
    $ukuran = htmlspecialchars($data['ukuran']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO pakaian
                    VALUES
                    (null, '$img', '$nama', '$deskripsi', '$warna', '$stok', '$ukuran', '$harga')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>