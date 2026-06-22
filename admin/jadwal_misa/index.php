<?php
include "../security.php";
include "../../koneksi.php";

$sql = "select * from jadwal_misa";
$query = mysqli_query($conn, $sql);
?>
<a href="../dashboard.php">Kembali ke Dashboard</a> |
<a href="tambah.php">Tambah Jadwal Misa</a>

<br><br>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Hari</th>
            <th>Jam</th>
            <th>Keterangan</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
        while($result = mysqli_fetch_array($query)){
            $id_jadwal = $result['id_jadwal'];
            $hari = $result['hari'];
            $jam = $result['jam'];
            $keterangan = $result['keterangan'];
        ?>
        <tr>
            <td><?= $id_jadwal ?></td>
            <td><?= $hari ?></td>
            <td><?= $jam ?></td>
            <td><?= $keterangan ?></td>
            <td>
                <a href="edit.php?id=<?= $id_jadwal; ?>">Edit</a> |
                <a href="hapus.php?id=<?= $id_jadwal; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php
            $no++;
        }
        ?>
    </tbody>
</table>