<?php
include "../security.php";
include "../../koneksi.php";

$sql = "select * from jenis_kegiatan";
$query = mysqli_query($conn, $sql);
?>
<a href="../dashboard.php">Kembali ke Dashboard</a> |
<a href="tambah.php">Tambah Jenis Kegiatan</a>

<br><br>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kegiatan</th>
        </th>
        </tr>
    </thead>
    <tbody>

        <?php
            $no = 1;
        while($result = mysqli_fetch_array($query)){
            $id_jenis = $result['id_jenis'];
            $nama_kegiatan = $result['nama_kegiatan'];
        ?>
        <tr>
            <td><?= $id_jenis ?></td>
            <td><?= $nama_kegiatan ?></td>
            <td>
                <a href="edit.php?id=<?= $id_jenis; ?>">Edit</a> |
                <a href="hapus.php?id=<?= $id_jenis; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php
            $no++;
        }
        ?>
    </tbody>
</table>