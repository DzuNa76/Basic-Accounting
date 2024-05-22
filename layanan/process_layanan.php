<?php
include '../koneksi.php'; // Sertakan file koneksi.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $layanan = $_POST['layanan'];
    $deskripsi = $_POST['deskripsi'];
    $lama_waktu = $_POST['lama_waktu'];
    $harga = $_POST['harga'];

    // Buat query untuk memasukkan data ke dalam tabel tb_input_layanan
    $query = "INSERT INTO tb_input_layanan (layanan, deskripsi, lama_waktu, harga) VALUES ('$layanan', '$deskripsi', '$lama_waktu', '$harga')";

    // Jalankan query
    if ($koneksi->query($query) === TRUE) {
        // Jika berhasil, redirect kembali ke halaman entry-layanan.php
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
