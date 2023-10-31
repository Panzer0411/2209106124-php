<?php

session_start();

require 'koneksi.php';

if(!isset($_SESSION['login'])) {
    echo "
    <script>
        alert('login terlebih dahulu sebelum menghapus data');
        document.location.href = 'login.php'
    </script>";
    exit;

}   

$id = $_GET['id'];


$result = mysqli_query($conn,"DELETE FROM srtmskklr WHERE id = '$id'");

if ($result) {
    echo "
    <script>
        alert('Data berhasil Hapus!');
        document.location.href = 'dashboard.php'
    </script>";
} else {
    echo "
    <script>
        alert('Data Gagal Hapus!');
        document.location.href = 'dashboard.php'
    </script>";
}

?>