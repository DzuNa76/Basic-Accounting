<?php
// Mulai sesi
session_start();

// Hapus semua data sesi
session_unset();

// Hancurkan sesi
session_destroy();

// Redirect ke halaman login
echo "
        <script>
            alert('Berhasil Logout');
            window.location = '../login.php';
        </script>
    ";
exit();
?>
