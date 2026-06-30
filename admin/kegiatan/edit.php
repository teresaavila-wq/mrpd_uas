<?php
include "../security.php";
include "../../koneksi.php";

$id = $_GET['id'] ?? '';

if ($id == '') {
    header("Location: index.php");
    exit;
}

$sql = "select * from kegiatan where id_kegiatan='$id'";
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
    <title>Edit Kegiatan</title>
</head>
<body>

<h1>Edit Kegiatan</h1>

<a href="index.php">Kembali</a>

<br><br>

<form method="POST" action="ubah.php">
    <input type="hidden" name="id_kegiatan" value="<?= $data['id_kegiatan']; ?>">

    <label>Deskripsi</label><br>
    <input type="text" name="deskripsi" value="<?= htmlspecialchars($data['deskripsi']); ?>">
    <br><br>

    <button type="submit" name="ubah">Ubah</button>
</form>

</body>
</html>