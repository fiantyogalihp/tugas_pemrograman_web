<?php

require 'functions.php';

$id = $_GET['id'];

$m = query("select * from pegawai where id=$id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DETAIL PEGAWAI KANESA</title>
</head>

<body>
  <h3>DETAIL PEGAWAI</h3>
  <ul>
    <li><img src="img/<?= $m['gambar']; ?>" width="90"></li>
    <li>NAMA : <?= $m['nama']; ?></li>
    <li>NO INDUK : <?= $m['no_induk']; ?></li>
    <li>EMAIL : <?= $m['email']; ?></li>
    <li>JURUSAN : <?= $m['jurusan']; ?></li>
    <li><a href="">ubah</a> | <a href="">hapus</a></li>
    <li><a href="index.php">kembali ke halaman utama</a></li>
  </ul>
</body>

</html>