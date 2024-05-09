<?php
session_start(); // Mulai session

if(isset($_POST['login'])) {
    $user = $_POST['Username'];
    $pass = $_POST['Password'];
    
    // Set session setelah login berhasil
    $_SESSION['username'] = $user;
    $_SESSION['password'] = $pass;

    echo "Username anda $user";
    // Redirect pengguna ke halaman setelah login berhasil
    // header("Location: ../index.php");
    // exit(); // Penting untuk menghentikan eksekusi script setelah mengarahkan pengguna
} else {
    echo "<p>Please login to access the dashboard.</p>";
}
?>
