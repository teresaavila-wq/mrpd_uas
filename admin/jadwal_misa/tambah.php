<?php
include "../security.php";
include "../../koneksi.php";

if (isset($_POST['simpan'])) {
    $hari = trim($_POST['hari']);
    $jam = trim($_POST['jam']);
    $keterangan = trim($_POST['keterangan']);

    if ($hari == '' || $jam == '' || $keterangan == '') {
        $error = "Semua field wajib diisi dengan benar.";
    } else {
        $id_admin = 2;
        $sql = "insert into jadwal_misa (hari, jam, keterangan, id_admin) values('$hari', '$jam', '$keterangan', '$id_admin')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            header("Location: index.php");
            exit;
        } else {
            $error = "Data gagal disimpan.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Jadwal Misa</title>
</head>
<body>

<h1>Tambah Jadwal Misa</h1>

<a href="index.php">Kembali</a>

<br><br>

<?php if (isset($error)) : ?>
    <p style="color:red;"><?= $error; ?></p>
<?php endif; ?>

<form method="POST">
    <label>Hari</label><br>
    <input type="text" name="hari">
    <br><br>

    <label>Jam</label><br>
    <input type="text" name="jam">
    <br><br>

    <label>Keterangan</label><br>
    <textarea name="keterangan" rows="4" cols="40"></textarea>
    <br><br>

    <button type="submit" name="simpan">Simpan</button>
</form>

</body>
</html>