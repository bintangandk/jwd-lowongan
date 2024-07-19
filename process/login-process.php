<?php

require_once("../function/koneksi.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id, username, role FROM users WHERE username = ? AND password = ?";
    
  
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $username, $password); 
    
   
    $stmt->execute();
    
    
    $stmt->bind_result($user_id, $db_username, $db_role); 
    
    
    $stmt->fetch();
    
    
    if ($db_username == $username && $db_role == 'admin') {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['user_id'] = $user_id;
        $_SESSION['role'] = 'admin';

        
        header("Location: ../page/dashboard.php");
        exit();
    } elseif ($db_username == $username && $db_role == 'user') {
        // Login berhasil sebagai user, atur session
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['user_id'] = $user_id;
        $_SESSION['role'] = 'user';

        // Redirect ke halaman user setelah login berhasil
        header("Location: ../page/user/lowongan.php");
        exit();
    } else {
        // Login gagal
        echo "Username atau password salah.";
    }
    
    // Tutup statement
    $stmt->close();
}
?>