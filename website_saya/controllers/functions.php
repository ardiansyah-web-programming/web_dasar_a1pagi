<?php
date_default_timezone_set("Asia/Jakarta");

function koneksi()
{
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "web_dasar_a1";
  return mysqli_connect(
    $server,
    $username,
    $password,
    $database
  );
}

function q($data)
{
  return mysqli_query(koneksi(), $data);
}

function buku()
{
  return q("SELECT * FROM `buku`");
}

function buku_satu($id_buku,$isi_tabel)
{
  $x = mysqli_fetch_assoc(q("SELECT * FROM buku WHERE
  id = '$id_buku'"));
  return $x[$isi_tabel];
}