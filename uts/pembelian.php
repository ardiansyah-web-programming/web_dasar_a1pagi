<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pembelian</title>
</head>

<body>
  <h1>Form Pembelian</h1>
  <table>
    <form action="" method="POST">
      <tr>
        <th>Nama Produk</th>
        <td>:</td>
        <td>
          <input type="text" name="nama_produk">
        </td>
      </tr>
      <tr>
        <th>Harga Produk</th>
        <td>:</td>
        <td>
          <input type="number" name="harga_produk">
        </td>
      </tr>
      <tr>
        <th>Qty Produk</th>
        <td>:</td>
        <td>
          <input type="number" name="qty_produk">
        </td>
      </tr>
      <tr>
        <th>Jumlah uang pembayaran</th>
        <td>:</td>
        <td>
          <input type="number" name="jumlah_bayar_produk">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <button type="submit" name="bayar" style="width: 100%;">Bayar</button>
        </td>
      </tr>
    </form>
  </table>
  <?php
  if (isset($_POST["bayar"])) {
    $nama_produk = $_POST["nama_produk"];
    $harga_produk = $_POST["harga_produk"];
    $qty_produk = $_POST["qty_produk"];
    $jumlah_bayar_produk = $_POST["jumlah_bayar_produk"];
    $total_pembayaran = $qty_produk * $harga_produk;
    $total_kembalian = $jumlah_bayar_produk - $total_pembayaran;
    echo "Nama Produk : " . $nama_produk . '<br>';
    echo "Harga Produk : " . $harga_produk . '<br>';
    echo "Qty Produk : " . $qty_produk . '<br>';
    echo "Total Pembayaran : " . $total_pembayaran . '<br>';
    echo "Jumlah Bayar : " . $jumlah_bayar_produk . '<br>';
    echo "Total Kembalian : " . $total_kembalian . '<br>';
  }
  ?>
</body>

</html>