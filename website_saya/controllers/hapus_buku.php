<?php
require "functions.php";

$id_buku = $_GET["id"];
if (buku_satu_jumlah($id_buku) < 1) {
  echo "<script>
  location='../buku.php';
  </script>";
} else {
  $hapus = q("DELETE FROM buku WHERE id = '$id_buku'");
  if ($hapus) {
    echo "
    <script>
    alert('Data berhasil dihapus!')
    location='../buku.php'
    </script>
    ";
  } else {
    echo "
    <script>
    alert('Data Gagal dihapus!')
    location='../buku.php'
    </script>
    ";
  }
}
