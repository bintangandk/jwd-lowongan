<?php

require_once("../../function/koneksi.php");

function hapus_data($data)
{
    $kode_buku = $data['hapus'];

    // Cek relasi foreign key
    // if (cekRelasiForeign($id_buku)) {
    //     $_SESSION['eksekusi'] = "Data tidak dapat dihapus karena data buku yang ingin dihapus terdaftar pada peminjaman buku. Jika ingin menghapus, ubah data peminjaman terlebih dahulu.";
    //     header("location: indexbuku.php");
    //     return false;
    // }

    $query = "DELETE FROM books WHERE kode_buku = '$kode_buku';";
    $sql = mysqli_query($GLOBALS['conn'], $query);
    return true;
}

?>