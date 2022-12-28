<?php

include_once ('koneksi.php');

// Query untuk mengambil data dari tabel
$query = "SELECT * FROM pendaftar";

// Menjalankan query
$result = mysqli_query($conn, $query);

// Mengecek apakah query berhasil dijalankan
if (!$result) {
  die("Query gagal dijalankan: " . mysqli_error($conn));
}

// Mengubah hasil query ke dalam array
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}

// Menutup koneksi
mysqli_close($conn);

// Menampilkan data dalam bentuk JSON
echo json_encode($data);

?>
