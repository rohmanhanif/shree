<?php

// Cek apakah form telah disubmit
if (isset($_POST['submit'])) {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tanggalLahir = $_POST['tanggal-lahir'];
    $jenisKelamin = $_POST['jenis-kelamin'];
    $asalSekolah = $_POST['asal-sekolah'];
    $namaWali = $_POST['nama-wali'];
    $pendidikanTerakhir = $_POST['pendidikan-terakhir'];
    $email = $_POST['email'];

    // Koneksi ke database
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "pendaftaran";

    // Membuat koneksi
    $conn = mysqli_connect($host, $user, $password, $dbname);

    // Cek koneksi, jika gagal tampilkan pesan kesalahan
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    } else {
        echo "Koneksi berhasil";
    }


    // Query untuk menambahkan data ke tabel
    $query = "INSERT INTO pendaftar (nama, alamat, tanggal_lahir, jenis_kelamin, asal_sekolah, nama_wali, pendidikan_terakhir, email) VALUES ('$nama', '$alamat', '$tanggalLahir', '$jenisKelamin', '$asalSekolah', '$namaWali', '$pendidikanTerakhir', '$email')";

    // Menjalankan query
    $result = mysqli_query($conn, $query);

    // Mengecek apakah query berhasil dijalankan
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_error($conn));
    }

    // Menutup koneksi
    mysqli_close($conn);
}

?>

<!-- <!DOCTYPE html>
<html>

<head>
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <form method="post" action="proses.php">
        <h2 class="text-center mb-5">Form Pendaftaran</h2>

        <p class="text-center">Silakan isi formulir di bawah ini untuk mendaftar:</p>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea class="form-control" id="alamat" name="alamat"></textarea>
        </div>
        <div class="form-group">
            <label for="tanggal-lahir">Tanggal Lahir:</label>
            <input type="date" class="form-control" id="tanggal-lahir" name="tanggal-lahir">
        </div>
        <div class="form-group">
            <label for="jenis-kelamin">Jenis Kelamin:</label><br>
            <div class="form-check ">
                <input class="form-check-input" type="radio" id="jenis-kelamin-laki-laki" name="jenis-kelamin" value="laki-laki">
                <label class="form-check-label" for="jenis-kelamin-laki-laki">Laki-laki</label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="radio" id="jenis-kelamin-perempuan" name="jenis-kelamin" value="perempuan">
                <label class="form-check-label" for="jenis-kelamin-perempuan">Perempuan</label>
            </div>
        </div>
        <div class="form-group">
            <label for="asal-sekolah">Asal Sekolah:</label>
            <input type="text" class="form-control" id="asal-sekolah" name="asal-sekolah">
        </div>
        <div class="form-group">
            <label for="nama-wali">Nama Wali:</label>
            <input type="text" class="form-control" id="nama-wali" name="nama-wali">
        </div>
        <div class="form-group">
            <label for="pendidikan-terakhir">Pendidikan Terakhir:</label>
            <select class="form-control" id="pendidikan-terakhir" name="pendidikan-terakhir">
                <option value="sd">SD</option>
                <option value="smp">SMP</option>
                <option value="sma">SMA</option>
                <option value="s1">S1</option>
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <button type="submit" value=" submit" class="btn btn-primary">Daftar</button>

    </form>
</body>

</html> -->