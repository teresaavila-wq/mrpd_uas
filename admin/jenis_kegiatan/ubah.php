<?php
include "../security.php";
include "../../koneksi.php";

if (isset($_POST['ubah'])) {
    $id_jenis = $_POST['id_jenis'];
    $nama_kegiatan = trim($_POST['nama_kegiatan']);

    if ($nama_kegiatan == '') {
        echo "Semua field wajib diisi dengan benar.";
        exit;
    }

    $sql = "update jenis_kegiatan set nama_kegiatan='$nama_kegiatan' where id_jenis='$id_jenis'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header("Location: index.php");
        exit;
    } else {
        echo "Data gagal diubah.";
    }
} else {
    header("Location: index.php");
    exit;
}