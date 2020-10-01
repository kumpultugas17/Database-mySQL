<?php 
include 'config/koneksi.php';
$id = $_GET['id'];

$sql = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id = $id");

if ($sql) {
    $row = mysqli_fetch_assoc($sql);
} else {
    echo "Data Tidak Ditemukan";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Mahasiswa</title>
</head>
<body>
    <h3>Tambah Data Mahasiswa</h3>
    <form action="" method="POST">
        <label for="nim">NIM</label>
        <input type="text" id="nim" name="nim" required value="<?= $row['nim']; ?>"><br>
        <label for="nama">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" required value="<?= $row['nama']; ?>"><br>
        <label for="jk">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="jk">
            <option value="l">Laki-laki</option>
            <option value="p">Perempuan</option>
        </select><br>
        <label for="jur">Jurusan</label>
        <select name="jurusan" id="jur">
        <?php foreach ($result as $row): ?>
            <option value="<?= $row['id']; ?>"><?= $row['nama']; ?></option>
        <?php endforeach ?>  
        </select><br>
        <label for="alamat">Alamat</label>
        <textarea rows="3" cols="30" name="alamat" id="alamat"><?= $row['alamat']; ?></textarea><br>
        <label for="telp">Nomor Telepon</label>
        <input type="text" id="telp" name="telp" required value="<?= $row['no_telp']; ?>"><br>
        <label for="email">E-Mail</label>
        <input type="email" id="email" name="email" required value="<?= $row['email']; ?>">
        <br><br><button type="submit" name="submit">Simpan</button>
    </form>
</body>
</html>