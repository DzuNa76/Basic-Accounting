<?php
// Sertakan file koneksi.php yang berisi kode untuk melakukan koneksi ke database
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $layanan = $_POST['layanan'];
    $total = $_POST['total'];

    // Buat query untuk mengupdate data di dalam tabel tb_pengajuan
    $query = "UPDATE tb_pengajuan SET 
                Username='$nama', 
                Kategori='$layanan', 
                harga='$total' 
              WHERE id=$id";

    // Jalankan query
    if ($koneksi->query($query) === TRUE) {
        // Jika berhasil, redirect kembali ke halaman transaction.php
        header("Location: transaction.php");
        exit();
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }
}

// Tutup koneksi database
$koneksi->close();
?>
