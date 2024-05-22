<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Ambil informasi pengguna
$username = $_SESSION['username'];
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
        </div>
    </div>

    <!-- script -->
    <script src="js/dashboard-script.js"></script>
</body>
</html>