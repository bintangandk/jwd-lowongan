<?php

require_once("../../function/koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode_buku =$_POST['kode_buku'];
    $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
    $tanggal_kembali = $_POST['tanggal_kembali'];
    
    // Melakukan sanitasi input
    $kode_buku = $conn->real_escape_string($kode_buku);
    $judul = $conn->real_escape_string($judul);
    $genre = $conn->real_escape_string($genre);
    $tanggal_terbit = $conn->real_escape_string($tanggal_terbit);
    $penerbit = $conn->real_escape_string($penerbit);
    $penulis = $conn->real_escape_string($penulis);

    // Membuat query SQL untuk menambahkan data
    $sql = "INSERT INTO books (kode_buku, judul, genre, tanggal_terbit, penerbit, penulis) VALUES ('$kode_buku', '$judul', '$genre', '$tanggal_terbit', '$penerbit', '$penulis')";

    if ($conn->query($sql) === TRUE) {
        header("location: daftar-buku.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>