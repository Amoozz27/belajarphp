<?php
require "proses_mahasiswa.php";//ambil seluruh mahasiswa

$mhs = listMahasiswa("SELECT * FROM mahasiswa ORDER BY namamahasiswa ASC")
?>

<html>
    <head>
        <title></title>
    </head>
</html>
<body>
    <a href="form.php">tambah mahasiswa</a>
    <table border="1" cellspasing="5" cellpadding="5">
        <tr>
            <th>no</th>
            <th>Nama Mahasiswa</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php $no=1; ?>
        <?php foreach ($mhs as $row): ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?php echo $row ['namamahasiswa']; ?></td>
            <td><?= $row['jk']; ?></td>
            <td><?= $row['tpt_lahir']; ?></td>
            <td><?= $row['tgl_lahir']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td>Hapus | Edit </td>
        </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
    </table>
</body>