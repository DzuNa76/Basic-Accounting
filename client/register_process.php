<?php
// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $email = $_POST['Email'];
    $username = $_POST['Username'];
    $password = $_POST['Password'];


    // Simpan data pengguna ke dalam cookie
    $cookie_name = $username;
    $cookie_value = json_encode(array('username' => $username, 'email' => $email));
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari

    echo "Email Anda: " . $email;
    echo "<br> Username: " . $username;

    // Redirect pengguna ke halaman setelah registrasi berhasil
    // header("Location: ../index.php");
    // exit();
}
?>
