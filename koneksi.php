<?php
$servername = 'localhost';
$username = 'root';
$password = ''; // jika tidak ada password di kosongkan saja
$database = 'db_basicaccounting';

// Mengaktifkan pelaporan error
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Membuat koneksi
    $koneksi = new mysqli($servername, $username, $password, $database);
    
    // Mengatur charset ke UTF-8
    $koneksi->set_charset("utf8mb4");
    
    // Mengecek koneksi
    if ($koneksi->connect_error) {
        throw new Exception('Connection Failed: ' . $koneksi->connect_error);
    }

} catch (Exception $e) {
    die('Connection Failed: ' . $e->getMessage());
}
?>
