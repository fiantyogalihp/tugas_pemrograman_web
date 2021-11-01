<?php

function koneksi()
{
  //memanggil database menggunakan variabel $conn/$db/$link
  return mysqli_connect('localhost', 'root', '', 'karyawan');
}

function query($query)
{
  //memanggil function koneksi as variabel $conn
  $conn = koneksi();
  //query data dari $conn(pemanggilan database ke php dan tabel
  $result = mysqli_query($conn, $query);

  //mengubah data tadi menjadi array 
  $rows = []; //untuk memunculkan data di database membuuhkan array kosong
  while ($row = mysqli_fetch_assoc($result)) { //array kosong itu nanti diisi dengan array assosiative yang berisi string ex :[nama]
    $rows[] = $row; // mendeklarasikan array kosong $rows yang diisi dengan array assosiative [id], [nama], etc.
  }

  return $rows;
}
