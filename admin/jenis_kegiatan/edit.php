<?php
include "../security.php";
include "../../koneksi.php";

$id = $_GET['id'] ?? '';

if ($id == '') {
    header("Location: index.php");
    exit;
}

$sql = "select * from jenis_kegiatan where id_jenis='$id'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

if (!$data) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Jenis Kegiatan</title>
</head>
<body>

<h1>Edit Jenis Kegiatan</h1>

<a href="index.php">Kembali</a>

<br><br>

<form method="POST" action="ubah.php">
    <input type="hidden" name="id_jenis" value="<?= $data['id_jenis']; ?>">

    <label>Nama Kegiatan</label><br>
    <input type="text" name="nama_kegiatan" value="<?= htmlspecialchars($data['nama_kegiatan']); ?>">
    <br><br>

    <button type="submit" name="ubah">Ubah</button>
</form>

</body>
</html>