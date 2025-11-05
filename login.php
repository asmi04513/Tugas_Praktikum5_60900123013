<?php
session_start();

// Daftar pengguna
$users = [
    'Admin' => 'pass@admiN1',
    'Anita' => 'pass@anitA2',
    'Sapta' => 'pass@saptA3',
    'xxx' => 'yyy', // Ganti dengan username dan password yang kamu buat
];

// Periksa apakah form login disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa apakah username dan password cocok
    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['username'] = $username; // Menyimpan session username
        header('Location: dashboard.php'); // Arahkan ke halaman dashboard
        exit();
    } else {
        // Pesan kesalahan sesuai instruksi soal
        if (isset($users[$username])) {
            $error = 'Password yang dimasukkan salah';
        } else {
            $error = 'Username tidak terdaftar';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>
    <main>
        <form method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        
        <?php if (isset($error)) echo "<p>$error</p>"; ?>
    </main>
    <footer>
        <p>&copy; 2025 Website</p>
    </footer>
</body>
</html>
