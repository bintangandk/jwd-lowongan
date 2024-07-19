<?php

function ubah_data($data)
{
    $id_lowongan = $data['id_lowongan'];
    $nama = $data['nama'];
    $posisi = $data['posisi'];
    $deskripsi = $data['deskripsi'];
    $tgl_ditutup = $data['tgl_ditutup'];
    $tgl_dibuka = $data['tgl_dibuka'];


    $queryShow = "SELECT * FROM tb_lowongan WHERE id_lowongan = '$id_lowongan';";
    $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    $query = "UPDATE tb_lowongan SET nama='$nama', posisi='$posisi', deskripsi='$deskripsi', tgl_dibuka='$tgl_dibuka', tgl_ditutup='$tgl_ditutup' WHERE id_lowongan='$id_lowongan';";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
}
?>