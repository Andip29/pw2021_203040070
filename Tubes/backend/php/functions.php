<?php
// fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "pw20070", ",UigYx6Wz3$n");
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
                    ('NULL', '$img', '$nama', '$deskripsi', '$warna', '$stok', '$ukuran', '$harga')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM pakaian WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();
    $nama = htmlspecialchars($data['nama']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $warna = htmlspecialchars($data['warna']);
    $stok = htmlspecialchars($data['stok']);
    $ukuran = htmlspecialchars($data['ukuran']);
    $harga = htmlspecialchars($data['harga']);

    $query = "UPDATE pakaian
            SET
            img = '$img',
            nama = '$nama',
            deskripsi = '$deskripsi',
            warna = '$warna',
            stok = '$stok',
            ukuran = '$ukuran',
            harga = '$harga'
            WHERE id = $id
            ";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "
                <script>
                    alert('username telah digunakan!');
                </script>";
            return false;
    }

    // cek konfirmasi password
    if( $password !== $password2) {
        echo "
                <script>
                    alert('konfirmasi password tidak sesuai!');
                </script>";
            return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('NULL', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
?>