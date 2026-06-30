<?php
include "../security.php";
include "../../koneksi.php";

$sql = "select * from kegiatan";
$query = mysqli_query($conn, $sql);
?>
<a href="../dashboard.php">Kembali ke Dashboard</a> |
<a href="tambah.php">Tambah Deskripsi</a>

<br><br>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Deskripsi</th>
        </th>
        </tr>
    </thead>
    <tbody>

        <?php
            $no = 1;
        while($result = mysqli_fetch_array($query)){
            $id_kegiatan = $result['id_kegiatan'];
            $deskripsi = $result['deskripsi'];
        ?>
        <tr>
            <td><?= $id_kegiatan ?></td>
            <td><?= $deskripsi ?></td>
            <td>
                <a href="edit.php?id=<?= $id_kegiatan; ?>">Edit</a> |
                <a href="hapus.php?id=<?= $id_kegiatan; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php
            $no++;
        }
        ?>
    </tbody>
</table>