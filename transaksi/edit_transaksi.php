<?php
// Sertakan file koneksi.php yang berisi kode untuk melakukan koneksi ke database
include '../koneksi.php';

if (isset($_GET['id'])) {
    $id_transaksi = $_GET['id'];
    $query = "SELECT * FROM tb_pengajuan WHERE id = $id_transaksi";
    $result = $koneksi->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Edit Data Transaksi</title>
            <link rel="stylesheet" href="../css/styledash.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
                  integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
                  crossorigin="anonymous" referrerpolicy="no-referrer">
        </head>
        <body>
        <div class="sidebar">
            <div class="logo"></div>
            <ul class="menu">
                <!-- Menu sidebar -->
            </ul>
        </div>

        <div class="main--content">
            <div class="header--wrapper">
                <div class="header--title">
                    <span>Data</span>
                    <h2>Edit Transaksi</h2>
                </div>
                <div class="user--info">
                    <div class="search--box">
                        <i class="fa-solid fa-search"></i>
                        <input type="text" placeholder="search">
                    </div>
                </div>
            </div>
            <div class="tabel-wrapper">
                <h3 class="main-title">Edit Data</h3>
                <div class="form-wrapper">
                    <form action="update_transaksi.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" value="<?php echo $row['Username']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="layanan">Layanan</label>
                            <input type="text" id="layanan" name="layanan" value="<?php echo $row['Kategori']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="total">Total</label>
                            <input type="text" id="total" name="total" value="<?php echo $row['harga']; ?>" required>
                        </div>
                        <div class="button-container">
                            <a href="../transaksi/transaction.php" class="move-button" style="text-decoration: none; display: inline-block; padding: 10px 20px; background-color: #ccc; color: #000; border-radius: 5px;">Kembali</a>
                            <button type="submit" class="move-button">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </body>
        </html>
        <?php
    } else {
        echo "No data found!";
    }
} else {
    echo "Invalid ID!";
}

$koneksi->close();
?>
