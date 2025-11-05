<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Redirect ke login jika belum login
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makanan Khas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Makanan Khas</h1>
        <div style="float: right;">Hi, <?php echo $_SESSION['username']; ?></div>
    </header>
    <main>
        <nav>
            <a href="dashboard.php">Dashboard</a>
            <a href="makanan_khas.php">Makanan Khas</a>
            <a href="logout.php">Keluar</a>
        </nav>
        <h2>Makanan Khas Indonesia</h2>
        <p>Berbagai makanan khas yang terkenal di Indonesia...</p>
    </main>
    <footer>
        <p>&copy; 2025 Website</p>
    </footer>
</body>
</html>
