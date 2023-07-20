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

function buku_satu($id_buku, $isi_tabel)
{
  $x = mysqli_fetch_assoc(q("SELECT * FROM buku WHERE
  id = '$id_buku'"));
  return $x[$isi_tabel];
}

function buku_satu_jumlah($id_buku)
{
  return mysqli_num_rows(
    q("SELECT * FROM buku WHERE id = '$id_buku'")
  );
}

function user_satu_jumlah($username)
{
  return mysqli_num_rows(
    q(
      "SELECT * FROM user WHERE username = '$username'"
    )
  );
}

function user_satu($username, $isi_tabel)
{
  $x = mysqli_fetch_assoc(
    q(
      "SELECT * FROM user WHERE username = '$username'"
    )
  );
  return $x[$isi_tabel];
}
