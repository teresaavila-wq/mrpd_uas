<?php
include "../security.php";
include "../../koneksi.php";

if (isset($_POST['simpan'])) {
    $nama_kegiatan = trim($_POST['nama_kegiatan']);

    if ($nama_kegiatan == '') {
        $error = "Semua field wajib diisi dengan benar.";
    } else {
        $id_admin = 2;
        $sql = "insert into jenis_kegiatan (nama_kegiatan) values('$nama_kegiatan)";
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
    <title>Tambah Jenis Kegiatan</title>
</head>
<body>

<h1>Tambah Jenis Kegiatan</h1>

<a href="index.php">Kembali</a>

<br><br>

<?php if (isset($error)) : ?>
    <p style="color:red;"><?= $error; ?></p>
<?php endif; ?>

<form method="POST">
    <label>Hari</label><br>
    <input type="text" name="nama_kegiatan">
    <br><br>

    <button type="submit" name="simpan">Simpan</button>
</form>

</body>
</html>