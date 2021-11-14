<?php
//variabel tabel yang nanti harus ada karena semua proses/funsgi nanti di pindah ke functions.php .
require 'functions.php';
$pegawai = query("SELECT * FROM pegawai");
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
      <th>aksi</th>
    </tr>
    <?php $i = 1;
    foreach ($pegawai as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
        <td><?= $m['nama']; ?></td>
        <td>
          <a href="detail.php?id=<?= $m['id']; ?>">lihat detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>