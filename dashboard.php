<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Ambil informasi pengguna
$username = $_SESSION['username'];

// Koneksi ke database
$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "db_basicaccounting";

$conn = new mysqli($servername, $username_db, $password_db, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query untuk mendapatkan jumlah layanan
$sql_layanan = "SELECT COUNT(*) as count FROM tb_input_layanan";
$result_layanan = $conn->query($sql_layanan);
$row_layanan = $result_layanan->fetch_assoc();
$count_layanan = $row_layanan['count'];

// Query untuk mendapatkan jumlah pengajuan
$sql_pengajuan = "SELECT COUNT(*) as count FROM tb_pengajuan";
$result_pengajuan = $conn->query($sql_pengajuan);
$row_pengajuan = $result_pengajuan->fetch_assoc();
$count_pengajuan = $row_pengajuan['count'];

// Query untuk mendapatkan jumlah pengguna
$sql_user = "SELECT COUNT(*) as count FROM tb_user";
$result_user = $conn->query($sql_user);
$row_user = $result_user->fetch_assoc();
$count_user = $row_user['count'];

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/styledash.css" />
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
    />
</head>
<body>
<div class="sidebar">
    <div class="logo"></div>
    <ul class="menu">
        <li>
            <a href="dashboard.php">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="layanan/entry-layanan.php">
                <i class="fas fa-note-sticky"></i>
                <span>Input Data</span>
            </a>
        </li>
        <li>
            <a href="layanan/service.php">
                <i class="fas fa-briefcase"></i>
                <span>Service</span>
            </a>
        </li>
        <li>
            <a href="transaksi/transaction.php">
                <i class="fas fa-chart-bar"></i>
                <span>Transaction</span>
            </a>
        </li>
        <li class="logout">
            <a href="client/logout.php">
                <i class="fas fa-sign-out-alt"></i>
                <span>Log out</span>
            </a>
        </li>
    </ul>
</div>
<div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
            <span>Home</span>
            <h2>Admin</h2>
        </div>
        <div class="user--info">
            <div class="search--box">
                <i class="fa-solid fa-search"></i>
                <input type="text" placeholder="search" />
            </div>
            <div class="user--name" id="username" data-username="<?php echo $username; ?>">
                <p>Welcome, <?php echo $username; ?>!</p>
            </div>
        </div>
    </div>
    <div class="tabel-wrapper">
        <div class="dashboard-home">
            <h2 id="text"></h2>
            <h3 id="date"></h3>
        </div>
        <div class="stats-wrapper">
            <div class="stats-card">
                <h3>Total Layanan</h3>
                <p><?php echo $count_layanan; ?></p>
            </div>
            <div class="stats-card">
                <h3>Total Pengajuan</h3>
                <p><?php echo $count_pengajuan; ?></p>
            </div>
            <div class="stats-card">
                <h3>Total Pengguna</h3>
                <p><?php echo $count_user; ?></p>
            </div>
        </div>
    </div>
</div>

<!-- script -->
<script src="js/script-dashboard.js"></script>
</body>
</html>
