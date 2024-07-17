<?php

require_once("../../function/koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    

    // Melakukan sanitasi input
    $nama = $conn->real_escape_string($nama);
    $tanggal_lahir = $conn->real_escape_string($tanggal_lahir);
    $alamat = $conn->real_escape_string($alamat);
    

    // Membuat query SQL untuk menambahkan data
    $sql = "INSERT INTO anggotas (nama, tanggal_lahir, alamat) VALUES ( '$nama', '$tanggal_lahir', '$alamat')";

    if ($conn->query($sql) === TRUE) {
        header("location: daftar-anggota.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>