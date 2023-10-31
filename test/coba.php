<?php
session_start();

// Fungsi untuk menginisialisasi session admin
function initAdminSession() {
    $_SESSION['role'] = 'admin';
    // Tambahkan data admin lainnya ke dalam session jika diperlukan
}

// Fungsi untuk menginisialisasi session user
function initUserSession() {
    $_SESSION['role'] = 'user';
    // Tambahkan data user lainnya ke dalam session jika diperlukan
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    if ($role === '1' && $username === 'admin' && $password === 'adminpass') {
        initAdminSession();
    } elseif ($role === '2' && $username === 'user' && $password === 'userpass') {
        initUserSession();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h1>Silakan login:</h1>
    <form method="post" action="">
        <label for="username">Username: </label>
        <input type="text" name="username" id="username" required><br>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password" required><br>
        
        <label for="role">Pilih peran:</label>
        <input type="checkbox" name="role" id="role" min="1" max="2" required>
        <p>Admin:, User:</p>
        
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
