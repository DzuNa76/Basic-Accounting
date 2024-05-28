<?php
include '../koneksi.php'; // Sertakan file koneksi.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $layanan = $_POST['layanan'];
    $deskripsi = $_POST['deskripsi'];
    $lama_waktu = $_POST['lama_waktu'];
    $harga = $_POST['harga'];

    // Untuk foto
    $foto = ''; // Inisialisasi variabel foto

    // Jika ada file yang diunggah
    if(isset($_FILES['foto'])) {
        $file_name = $_FILES['foto']['name'];
        $file_tmp = $_FILES['foto']['tmp_name'];
        $file_size = $_FILES['foto']['size'];
        $file_type = $_FILES['foto']['type'];
        
        // Tentukan direktori penyimpanan file
        $upload_dir = "../asset/";

        // Pindahkan file yang diunggah ke direktori yang ditentukan
        move_uploaded_file($file_tmp, $upload_dir.$file_name);

        // Simpan path foto ke dalam variabel $foto
        $foto = $file_name;
    }

    // Buat query untuk memasukkan data ke dalam tabel tb_input_layanan
    $query = "INSERT INTO tb_input_layanan (layanan, deskripsi, lama_waktu, harga, foto) VALUES ('$layanan', '$deskripsi', '$lama_waktu', '$harga', '$foto')";

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
