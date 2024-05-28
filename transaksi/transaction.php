<?php
// Sertakan file koneksi.php yang berisi kode untuk melakukan koneksi ke database
include '../koneksi.php';

// Buat query untuk mengambil data transaksi dari database
$query = "SELECT * FROM tb_pengajuan";
$result = $koneksi->query($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/styledash.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <!-- sidebar -->
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
              <a href="../layanan/entry-layanan.php">
                  <i class="fas fa-note-sticky"></i>
                  <span>Input Data</span>
              </a>
          </li>
          <li>
              <a href="../layanan/service.php">
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
              <a href="../client/logout.php">
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
                <h2>Transaksi</h2>
            </div>
            <div class="user--info">
                <!-- Search box -->
            </div>
        </div>
        <div class="tabular--wrapper">
            <div class="button-container">
                <a href="../transaksi/cetak_transaksi.php" class="move-button" style="text-decoration: none; display: inline-block; padding: 10px 20px; background-color: #ccc; color: #000; border-radius: 5px;">Cetak</a>
            </div>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>ID Transaksi</th>
                            <th>Nama</th>
                            <th>Layanan</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Periksa apakah ada data yang ditemukan
                        if ($result->num_rows > 0) {
                            // Loop melalui hasil query untuk menampilkan setiap data transaksi
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['tgl_diubah'] . "</td>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['Username'] . "</td>";
                                echo "<td>" . $row['Kategori'] . "</td>";
                                echo "<td>Rp. " . number_format($row['harga'], 0, ',', '.') . "</td>";
                                echo "<td><p class='success'>Sukses</p></td>";
                                echo "<td>";
                                echo "<form action='edit_transaksi.php' method='get'>";
                                echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
                                echo "<button type='submit' class='btn-edit'>Edit</button>";
                                echo "</form>";
                                echo "<form action='delete_transaksi.php' method='get'>";
                                echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
                                echo "<button type='submit' class='btn-delete'>Delete</button>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            // Jika tidak ada data transaksi
                            echo "<tr><td colspan='7'>Tidak ada data transaksi.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
