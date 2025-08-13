<?php
session_start();

// Cek login
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

// Ambil halaman dari URL
$page = $_GET['page'] ?? 'home';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="sidebar">
    <h2>My Dashboard</h2>
    <ul>
        <li><a href="welcome.php?page=home">🏠 Home</a></li>
        <li><a href="welcome.php?page=nilai">📊 Nilai</a></li>
        <li><a href="welcome.php?page=kehadiran">📝 Kehadiran</a></li>
        <li><a href="welcome.php?page=jadwal">📅 Jadwal</a></li>
        <li><a href="welcome.php?page=pengaturan">⚙ Pengaturan</a></li>
        <li><a href="welcome.php?page=laporan">📑 Laporan</a></li>
        <li><a href="logout.php">🚪 Logout</a></li>
    </ul>
</div>

<div class="content">
    <?php
    $file = "pages/" . $page . ".php";
    if (file_exists($file)) {
        include $file;
    } else {
        echo "<h2>Halaman tidak ditemukan</h2>";
    }
    ?>
</div>

</body>
</html>
