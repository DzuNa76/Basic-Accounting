<?php
session_start();
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    // Mencari pengguna berdasarkan username
    $stmt = $koneksi->prepare("SELECT id, Password FROM tb_user WHERE Username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        // Verifikasi password
        if (password_verify($password, $hashed_password)) {
            // Password benar, buat sesi untuk pengguna
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            echo "<script>
                    alert('Login berhasil.');
                    window.location = '../index.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Password salah.');
                    window.location = '../login.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Username tidak ditemukan.');
                window.location = '../login.php';
              </script>";
    }

    $stmt->close();
}
$koneksi->close();
?>
