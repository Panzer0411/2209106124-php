<?php
require 'koneksi.php';
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM srtmskklr where id=$id");

$surate = [];

while ($row = mysqli_fetch_assoc($result)){
    $surate[] = $row;
}

$surate = $surate[0];

if (isset($_POST['edit'])) {
    $nama = $_POST['nama'];
    $nomor_surat = $_POST['nomor_surat'];
    $lampiran = $_POST['lampiran'];
    $perihal = $_POST['perihal'];
    $instansi = $_POST['instansi'];

    $result = mysqli_query($conn, "UPDATE srtmskklr set nama = '$nama', nomor_surat = '$nomor_surat', lampiran = '$lampiran', perihal = '$perihal', instansi = '$instansi' WHERE id = '$id' ");

    if ($result) {
        echo "
        <script>
            alert('Data Berhasil Di perbaharui!');
            document.location.href = 'dashboard.php'
        </script>";
    }else {
        echo "
        <script>
            alert('Data Gagal Di perbaharui!');
            document.location.href = 'edit.php'
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="styling.css">
</head>
<body>
    <section class="add-data">
        <div class="add-form-container">
            <h1>Masukkan Data Baru</h1><hr><br>
            <form action="" method="post">
                <label for="nama">Nama</label>
                <input type="text" name="nama" value="<?php echo $surate['nama']?>" class="textfield">
                <label for="nomor_surat">Nomor Surat</label>
                <input type="text" name="nomor_surat" value="<?php echo $surate['nomor_surat']?>" class="textfield">
                <label for="lampiran">Lampiran</label>
                <input type="text" name="lampiran" value="<?php echo $surate['lampiran']?>" class="textfield">
                <label for="perihal">Perihal</label>
                <input type="text" name="perihal" value="<?php echo $surate['perihal']?>" class="textfield">
                <label for="instansi">Instansi</label>
                <input type="text" name="instansi" value="<?php echo $surate['instansi']?>" class="textfield">
                <input type="submit" name="edit" value="Submit" class="login-btn">
            </form>
        </div>
    </section>
</body>
</html>