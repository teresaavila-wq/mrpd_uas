<?php
include "../security.php";
include "../../koneksi.php";

if (isset($_POST['ubah'])) {
    $id_jadwal = $_POST['id_jadwal'];
    $hari = trim($_POST['hari']);
    $jam = trim($_POST['jam']);
    $keterangan = trim($_POST['keterangan']);
    

    if ($hari == '' || $jam == '' || $keterangan == '' ) {
        echo "Semua field wajib diisi dengan benar.";
        exit;
    }

    $sql = "update jadwal_misa set hari='$hari', jam='$jam', keterangan='$keterangan' where id_jadwal='$id_jadwal'";
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