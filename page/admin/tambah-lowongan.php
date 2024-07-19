<?php

require_once("../../function/koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode_lowongan =$_POST['kode_lowongan'];
    $nama_perusahaan= $_POST['nama_perusahaan'];
    $posisi = $_POST['posisi'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal_dibuka = $_POST['tanggal_dibuka'];
    $tanggal_ditutup = $_POST['tanggal_ditutup'];
    $email = $_POST['email'];
    

    // Melakukan sanitasi input
    $kode_lowongan = $conn->real_escape_string($kode_lowongan);
    $nama_perusahaan = $conn->real_escape_string($nama_perusahaan);
    $posisi = $conn->real_escape_string($posisi);
    $deskripsi = $conn->real_escape_string($deskripsi);
    $tanggal_dibuka = $conn->real_escape_string($tanggal_dibuka);
    $tanggal_ditutup = $conn->real_escape_string($tanggal_ditutup);
    $email = $conn->real_escape_string($email);
    
    

    // Membuat query SQL untuk menambahkan data
    $sql = "INSERT INTO lowongans (kode_lowongan, nama_perusahaan, posisi, deskripsi, tanggal_dibuka, tanggal_ditutup, email) VALUES ('$kode_lowongan', '$nama_perusahaan', '$posisi', '$deskripsi', '$tanggal_dibuka', '$tanggal_ditutup', '$email')";

    if ($conn->query($sql) === TRUE) {
        header("location: daftar-lowongan.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>