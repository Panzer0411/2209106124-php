<?php
session_start();
require 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cari pengguna berdasarkan username
    $result = mysqli_query($conn, "SELECT * FROM reglog WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        // Periksa apakah password yang dimasukkan sesuai dengan password yang di-hash
        if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;
            header("location: dashboard.php");
            exit;
        } else {
            echo "<script>
                alert('Password mismatch. Silakan coba lagi.');
                location.href = 'login.php';
                </script>";
        }
    } else {
        echo "<script>
            alert('Username tidak ditemukan. Silakan registrasi ulang.');
            location.href = 'registrasi.php';
            </script>";
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="container">
        <h2>Login</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="login" class="login-button">Login</button>
            <p class="register-link">Belum punya akun? <a href="registrasi.php">Registrasi</a></p>
        </form>
    </div></body>
</html>
