<?php

require_once("../../function/koneksi.php");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Periksa apakah form delete telah dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    // Query untuk menghapus data
    $sql = "DELETE FROM lowongans WHERE id = ?";
    
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id); // Bind parameter (i = integer untuk id)
    
   
    if ($stmt->execute()) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . $stmt->error;
    }
    
    
    $stmt->close();
}


$conn->close();
?>

