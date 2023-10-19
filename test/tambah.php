<?php
require 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nomor_surat = $_POST['nomor_surat'];
    $lampiran = $_POST['lampiran'];
    $perihal = $_POST['perihal'];
    $instansi = $_POST['instansi'];

    $result = mysqli_query($conn, "INSERT INTO srtmskklr VALUES 
    ('', '$nama', '$nomor_surat', '$lampiran', '$perihal', '$instansi')");

    if ($result) {
        echo "
        <script>
            alert('Data Berhasil DiTambahkan!');
            document.location.href = 'dashboard.php'
        </script>";
    }else {
        echo "
        <script>
            alert('Data Gagal DiTambahkan!');
            document.location.href = 'tambah.php'
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="styling.css">
</head>
<body>
    <section class="add-data">
        <div class="add-form-container">
            <h1>Tambah Data</h1><hr><br>
            <form action="" method="post">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="textfield">
                <label for="nomor_surat">Nomor Surat</label>
                <input type="text" name="nomor_surat" class="textfield">
                <label for="lampiran">Lampiran</label>
                <input type="number" name="lampiran" class="textfield">
                <label for="perihal">Perihal</label>
                <input type="text" name="perihal" class="textfield">
                <label for="instansi">instansi</label>
                <input type="text" name="instansi" class="textfield">
                <input type="submit" name="submit" value="Tambah Data" class="login-btn">
            </form>
        </div>
    </section>
</body>
</html>