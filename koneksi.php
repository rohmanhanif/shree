<?php
$host = 'localhost'; // atau alamat server database Anda
$user = 'root'; // username database Anda
$pass = ''; // password database Anda
$db = 'pendaftaran'; // nama database yang akan Anda gunakan

// Buat koneksi ke database
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi, tampilkan pesan jika gagal
if (!$conn) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
 //echo "Koneksi ke database berhasil!";
?>
