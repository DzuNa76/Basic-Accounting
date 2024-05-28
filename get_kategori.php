<?php
// Sertakan file koneksi.php yang berisi kode untuk melakukan koneksi ke database
include 'koneksi.php';

if (isset($_GET['id'])) {
    $categoryId = $_GET['id'];

    $sql = "SELECT * FROM tb_input_layanan WHERE id = $categoryId";
    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        // Mengambil data kategori dan harga dari hasil query
        $kategori = $data['layanan'];
        $harga = $data['harga'];

        // Menyiapkan data yang akan dikirim kembali dalam format JSON
        $response = array(
            'kategori' => $kategori,
            'harga' => $harga // Menggunakan harga yang sudah diformat
        );
        echo json_encode($response);
    } else {
        echo json_encode(['error' => 'Gagal mengambil data kategori.']);
    }
} else {
    echo json_encode(['error' => 'ID Kategori tidak diberikan.']);
}
?>
