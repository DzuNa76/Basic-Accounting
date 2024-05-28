<?php
include '../koneksi.php';

// Periksa apakah parameter id telah diterima melalui metode GET
if (isset($_GET['id'])) {
    // Hindari SQL injection dengan menggunakan prepared statement
    $id = $_GET['id'];
    $query = "DELETE FROM tb_pengajuan WHERE id = ?";
    
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        // Alert box bahwa data berhasil dihapus
        echo "<script>alert('Data transaksi berhasil dihapus');</script>";
        // Redirect ke halaman transaction.php setelah menghapus data
        header("Location: transaction.php");
        exit(); // Pastikan tidak ada output lain sebelum header
    } else {
        echo "Error: Gagal menghapus data transaksi";
    }

    // Tutup prepared statement
    $stmt->close();
} else {
    echo "Error: ID transaksi tidak diterima";
}

// Tutup koneksi database
$koneksi->close();
?>
