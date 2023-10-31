<?php

require 'koneksi.php';

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $password = password_hash($password, PASSWORD_DEFAULT);
    $result = mysqli_query($conn, "SELECT email, username FROM reglog WHERE email = '$email' OR username = '$username'");
        
        if (mysqli_fetch_assoc($result)) {
            echo "<script>
                alert('Username atau email duah terpakai. Silakan pilih username lain!!!');
                location.href = 'registrasi.php';
                </script>";
        } else {
            $sql = "INSERT INTO reglog (email, no_hp, username, password) VALUES ('$email', '$no_hp', '$username', '$password')";

            $result = mysqli_query($conn, $sql);

         if (mysqli_affected_rows($conn) > 0) {
            echo "<script>
                alert('Registrasi berhasil!');
                location.href = 'login.php';
            </script>";
        } else {
                echo "<script>
                alert('Registrasi gagal. Silakan coba lagi.');
                location.href = 'registrasi.php';
                </script>";
            }
        }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="regis.css">
</head>
<body>
<div class="container">
        <h2>Registrasi</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="no_hp">Nomor Telepon</label>
                <input type="number" name="no_hp" placeholder="Nomor Telepon" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="register" class="register-button">Register</button>
            <p class="login-link">Sudah punya akun? <a href="login.php">Log in</a></p>
        </form>
    </div>
</body>
</html>
