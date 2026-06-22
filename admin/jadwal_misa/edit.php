<?php
include "../security.php";
include "../../koneksi.php";

$id = $_GET['id'] ?? '';

if ($id == '') {
    header("Location: index.php");
    exit;
}

$sql = "select * from jadwal_misa where id_jadwal='$id'";
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
    <title>Edit Jadwal Misa</title>
</head>
<body>

<h1>Edit Jadwal Misa</h1>

<a href="index.php">Kembali</a>

<br><br>

<form method="POST" action="ubah.php">
    <input type="hidden" name="id" value="<?= $data['id']; ?>">

    <label>Hari</label><br>
    <input type="text" name="hari" value="<?= htmlspecialchars($data['hari']); ?>">
    <br><br>

    <label>Jam</label><br>
    <input type="text" name="jam" value="<?= htmlspecialchars($data['jam']); ?>">
    <br><br>

    <label>Keterangan</label><br>
    <textarea name="keterangan" rows="4" cols="40"><?= htmlspecialchars($data['keterangan']); ?></textarea>
    <br><br>

    <button type="submit" name="ubah">Ubah</button>
</form>

</body>
</html>