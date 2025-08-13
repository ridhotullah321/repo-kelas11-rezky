<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="welcome.css">
</head>
<body>
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li><a href="welcome.php?page=home">Home</a></li>
            <li><a href="welcome.php?page=nilai">Nilai</a></li>
            <li><a href="welcome.php?page=kehadiran">Kehadiran</a></li>
            <li><a href="welcome.php?page=jadwal">Jadwal</a></li>
            <li><a href="welcome.php?page=pengaturan">Pengaturan</a></li>
            <li><a href="welcome.php?page=laporan">Laporan</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

    <div class="content">
        <?php
        switch($page) {
            case 'home':
                echo "<h1>Selamat Datang di Dashboard</h1><h2>Halo, saya Muhammad Al Bukhori!</h2>
<p>
Saya adalah seorang siswa di sekolah Ibnul Qayyim yang saat ini sedang duduk di kelas XI jurusan RPL (Rekayasa Perangkat Lunak).<br>
Saya memiliki minat dalam bidang , dan saya selalu berusaha untuk meningkatkan pengetahuan dan keterampilan saya setiap hari.<br>
Di dashboard ini, saya dapat melihat nilai, kehadiran, jadwal pelajaran, dan berbagai informasi penting lainnya yang mendukung kegiatan belajar saya.
</p>
";
                break;
            case 'nilai':
                echo "<h1>Halaman Nilai</h1><p>Menampilkan data nilai siswa.</p>";
                break;
            case 'kehadiran':
                echo "<h1>Halaman Kehadiran</h1><p>Menampilkan data kehadiran siswa.</p>";
                break;
            case 'jadwal':
                echo "<h1>Halaman Jadwal</h1><p>Menampilkan jadwal pelajaran.</p>";
                break;
            case 'pengaturan':
                echo "<h1>Halaman Pengaturan</h1><p>Pengaturan akun dan preferensi.</p>";
                break;
            case 'laporan':
                echo "<h1>Halaman Laporan</h1><p>Menampilkan laporan bulanan/tahunan.</p>";
                break;
            default:
                echo "<h1>404 - Halaman tidak ditemukan!</h1>";
            
        }
        ?>
    </div>
</body>
</html>
