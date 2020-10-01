<?php
include 'config/koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Data Mahasiswa</h3>
    <a href="add-mahasiswa.php">Add Data</a>
    <br><br>
    <table border="1" cellpadding="7" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>E-mail</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($result as $row): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nim']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php if ($row['jk'] == 'l') {
                        echo "Laki-laki";
                    } else {
                        echo "Perempuan";
                    } ?>
            </td>
            <td><?php echo $row['jurusan_id']; ?></td>
            <td><?php echo $row['alamat']; ?></td>
            <td><?php echo $row['no_telp']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><a href=""><button>Edit</button></a> | <a href="hapus.php?id=<?= $row['id']; ?>"><button>Hapus</button></a></td>
        </tr>    
        <?php endforeach ?>
    </table>
</body>
</html>
