<?php
include "../security.php";
include "../../koneksi.php";

if (isset($_POST['simpan'])) {
    $deskripsi = trim($_POST['deskripsi']);

    if ($deskripsi == '') {
        $error = "Semua field wajib diisi dengan benar.";
    } else {
        $sql = "insert into kegiatan (deskripsi, id_admin) values('$deskripsi', '$id_admin')";
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
    <title>Tambah Deskripsi</title>
</head>
<body>

<h1>Tambah Deskripsi</h1>

<a href="index.php">Kembali</a>

<br><br>

<?php if (isset($error)) : ?>
    <p style="color:red;"><?= $error; ?></p>
<?php endif; ?>

<form method="POST">
    <label>Deskripsi</label><br>
    <input type="text" name="deskripsi">
    <br><br>

    <button type="submit" name="simpan">Simpan</button>
</form>

</body>
</html>