<?php
// Sertakan file koneksi.php yang berisi kode untuk melakukan koneksi ke database
include '../koneksi.php';

// Pastikan bahwa form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai yang dikirimkan melalui form
    $nama = $_POST['nama'];
    $nomorhp = $_POST['nomorhp'];
    $alamat = $_POST['alamat'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];

    // Lakukan validasi data jika diperlukan

    // Buat query untuk menyimpan data pengajuan layanan ke dalam database
    $sql = "INSERT INTO tb_pengajuan (Username, No_Hp, Alamat, Kategori, Harga) 
            VALUES ('$nama', '$nomorhp', '$alamat', '$kategori', '$harga')";

    // Eksekusi query dan periksa apakah pengajuan layanan berhasil disimpan
    if (mysqli_query($koneksi, $sql)) {
        // Jika berhasil, tampilkan pesan sukses dengan alert box menggunakan JavaScript
        echo "<script>alert('Pengajuan layanan berhasil dikirim.'); window.location.href = '../index.php';</script>";
        exit;
    } else {
        // Jika terjadi kesalahan saat menyimpan data, tampilkan pesan kesalahan dengan alert box menggunakan JavaScript
        echo "<script>alert('Terjadi kesalahan saat mengirim pengajuan layanan. Silakan coba lagi.'); window.location.href = '../index.php#myModal';</script>";
        exit;
    }
} else {
    // Jika form tidak disubmit, redirect kembali ke halaman form pengajuan
    header("Location: ../index.php#myModal");
    exit;
}
?>
