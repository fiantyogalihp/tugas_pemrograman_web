<?php
$conn = mysqli_connect('localhost', 'root', '', 'karyawan');

$result = mysqli_query($conn, "SELECT * FROM pegawai");

//mengubah data tadi menjadi array 
$rows = []; //untuk memunculkan data di database membuuhkan array kosong
while ($row = mysqli_fetch_assoc($result)) { //array kosong itu nanti diisi dengan array assosiative yang berisi string ex :[nama]
  $rows[] = $row; // mendeklarasikan array kosong $rows yang diisi dengan array assosiative [id], [nama], etc.
}

$pegawai = $rows;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DATA PEGAWAI KANESA</title>
</head>

<body>
  <h3>DAFTAR PEGAWAI KANESA</h3>

  <table border="10" cellpadding="10" cellspace="0">
    <tr>
      <th>no</th>
      <th>gambar</th>
      <th>nama</th>
      <th>no induk</th>
      <th>email</th>
      <th>jurusan</th>
      <th>aksi</th>
    </tr>
    <?php $i = 1;
    foreach ($pegawai as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
        <td><?= $m['nama']; ?></td>
        <td><?= $m['no_induk']; ?></td>
        <td><?= $m['email']; ?></td>
        <td><?= $m['jurusan']; ?></td>
        <td>
          <a href="">ubah</a> | <a href="hapus">hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>