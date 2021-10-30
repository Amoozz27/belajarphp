<?php
$conn = mysqli_connect("localhost","root","","belajar_crud");
$mhs = mysqli_query($conn,"SELECT * FROM mahasiswa ORDER BY namamahasiswa ASC");

//mysqli_fetch_array // Mengembalikan dalam bentuk numeric/associative
//mysqli_fetch_rows // Mengembalikan dalam bentuk array numeric
//mysqli_fetch_assoc // Mengembalikan dalam bentuk array Associative
//mysqli_fetch_object // Mengembalikan dalam bentuk array Object
//$row = mysqli_fetch_object($mhs);
// var_dump($row->tempat_lahir);
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
        <?php while($row = mysqli_fetch_assoc($mhs)): ?>
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
        <?php endwhile ?>
    </table>
</body>