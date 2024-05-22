<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Service</title>
    <link rel="stylesheet" href="../css/styledash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
<div class="sidebar">
    <div class="logo"></div>
    <ul class="menu">
        <li>
            <a href="../dashboard.php">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="entry-layanan.php">
                <i class="fas fa-note-sticky"></i>
                <span>Input Data</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-briefcase"></i>
                <span>Service</span>
            </a>
        </li>
        <li>
            <a href="../transaksi/transaction.php">
                <i class="fas fa-chart-bar"></i>
                <span>Transaction</span>
            </a>
        </li>
        <li class="logout">
            <a href="#">
                <i class="fas fa-sign-out-alt"></i>
                <span>Log out</span>
            </a>
        </li>
    </ul>
</div>

<div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
            <span>Data</span>
            <h2>Layanan</h2>
        </div>
        <div class="user--info">
            <div class="search--box">
                <i class="fa-solid fa-search"></i>
                <input type="text" placeholder="search">
            </div>
        </div>
    </div>
    <div class="tabular--wrapper">
        <div class="table-container">
            <table>
                <thead>
                <tr>
                    <th>Layanan</th>
                    <th>Deskripsi</th>
                    <th>Lama Waktu</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  include '../koneksi.php'; // Sertakan file koneksi.php

                  // Query untuk mengambil data layanan dari database
                  $query = "SELECT * FROM tb_input_layanan";
                  $result = $koneksi->query($query);

                  // Cek apakah ada data yang ditemukan
                  if ($result->num_rows > 0) {
                      // Tampilkan data layanan dalam bentuk tabel
                      while ($row = $result->fetch_assoc()) {
                          echo "<tr>";
                          echo "<td>" . $row['layanan'] . "</td>";
                          echo "<td>" . $row['deskripsi'] . "</td>";
                          echo "<td>" . $row['lama_waktu'] . "</td>";
                          echo "<td>Rp. " . number_format($row['harga'], 0, ',', '.') . "</td>";
                          echo "<td>";
                          // Perbarui tombol "Edit" untuk menavigasi ke entry-layanan.php dengan parameter ID
                          echo "<form action='entry-layanan.php' method='get'>";
                          echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
                          echo "<button type='submit' class='btn-edit'>Edit</button>";
                          echo "</form>";
                          echo "<form action='delete_layanan.php' method='post' style='display:inline;'>";
                          echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
                          echo "<button type='submit' class='btn-delete' onclick='return confirm(\"Apakah Anda yakin ingin menghapus layanan ini?\")'>Hapus</button>";
                          echo "</form>";
                          echo "</td>";
                          echo "</tr>";
                      }
                  } else {
                      echo "<tr><td colspan='5'>Tidak ada data layanan</td></tr>";
                  }

                  // Tutup koneksi database
                  $koneksi->close();
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
