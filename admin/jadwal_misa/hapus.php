<?php
include "../security.php";
include "../../koneksi.php";

$id = $_GET['id_jadwal'] ?? '';

if ($id == '') {
    header("Location: index.php");
    exit;
}

$sql = "delete from courses where id_jadwal='$id'";
$query = mysqli_query($conn, $sql);

header("Location: index.php");
exit;