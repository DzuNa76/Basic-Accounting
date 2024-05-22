<?php
include '../koneksi.php';

// Periksa apakah parameter id telah diterima melalui metode POST
if (isset($_POST['id'])) {
    // Hindari SQL injection dengan menggunakan prepared statement
    $id = $_POST['id'];
    $query = "DELETE FROM tb_input_layanan WHERE id = ?";
    
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo "Data layanan berhasil dihapus";
        header("Location: service.php");
    } else {
        echo "Error: Gagal menghapus data layanan";
    }

    // Tutup prepared statement
    $stmt->close();
} else {
    echo "Error: ID layanan tidak diterima";
}

// Tutup koneksi database
$koneksi->close();
?>
