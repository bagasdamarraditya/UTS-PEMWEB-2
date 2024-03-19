<?php
// Tangkap Input Login
$email = $_POST['email'];
$password = $_POST['password'];

// validasi login
if($email == 'admin@gmail.com' && $password == '12345678'){
    header('Location: dashboard.php');
    exit(); // Pastikan untuk keluar setelah mengarahkan pengguna ke dashboard
} else {
    // Tampilkan pesan error melalui JavaScript
    echo "<script>
            alert('Email atau password salah.');
            window.location.href = 'index.php';
          </script>";
}
?>
