<?php
include '../koneksi.php'; // Sertakan file koneksi.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $id = $_POST['id'];
    $layanan = $_POST['layanan'];
    $deskripsi = $_POST['deskripsi'];
    $lama_waktu = $_POST['lama_waktu'];
    $harga = $_POST['harga'];

    // Buat query untuk mengupdate data di dalam tabel tb_input_layanan
    $query = "UPDATE tb_input_layanan SET 
                layanan='$layanan', 
                deskripsi='$deskripsi', 
                lama_waktu='$lama_waktu', 
                harga='$harga' 
              WHERE id=$id";

    // Jalankan query
    if ($koneksi->query($query) === TRUE) {
        // Jika berhasil, redirect kembali ke halaman service.php
        header("Location: service.php");
        exit();
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }
}

// Tutup koneksi database
$koneksi->close();
?>
