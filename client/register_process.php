<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['Email'];
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    // Cek apakah email atau username sudah digunakan
    $stmt = $koneksi->prepare("SELECT id FROM tb_user WHERE Email = ? OR Username = ?");
    $stmt->bind_param("ss", $email, $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<script>
                alert('Email atau Username sudah digunakan.');
                window.location = '../register.php';
              </script>";
        $stmt->close();
    } else {
        $stmt->close();

        // Hash password sebelum menyimpan ke database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Masukkan data pengguna baru ke database
        $stmt = $koneksi->prepare("INSERT INTO tb_user (Email, Username, Password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $username, $hashed_password);

        if ($stmt->execute()) {
            echo "<script>
                    alert('Pendaftaran berhasil.');
                    window.location = '../index.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Terjadi kesalahan: " . $stmt->error . "');
                    window.location = '../register.php';
                  </script>";
        }

        $stmt->close();
    }
}
$koneksi->close();
?>
