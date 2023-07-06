<?php
require "controllers/functions.php";
$id_buku = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Saya</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <h1>Selamat Datang di Halaman Edit Buku</h1>
    <hr>
    <ul>
        <a href="buku.php">
            <li>Buku</li>
        </a>
        <a href="pinjam.php">
            <li>Pinjam Buku</li>
        </a>
    </ul>
    <hr>
    <form action="" method="POST">
        <table>
            <tr>
                <th>Judul Buku</th>
                <td>:</td>
                <td>
                    <input name="judul_buku" type="text" placeholder="Input judul buku" value="<?= buku_satu($id_buku,"judul_buku") ?>">
                </td>
            </tr>
            <tr>
                <th>Tahun Terbit</th>
                <td>:</td>
                <td>
                    <input name="tahun_terbit" type="number" placeholder="Input tahun terbit" value="<?= buku_satu($id_buku,"tahun_terbit") ?>">
                </td>
            </tr>
            <tr>
                <th>Penulis</th>
                <td>:</td>
                <td>
                    <input type="text" name="penulis" placeholder="Input penulis" value="<?= buku_satu($id_buku,"penulis") ?>">
                </td>
            </tr>
            <tr>
                <th>Penerbit</th>
                <td>:</td>
                <td>
                    <input type="text" name="penerbit" placeholder="Input penerbit" value="<?= buku_satu($id_buku,"penerbit") ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button name="edit_buku" type="submit" style="background: darkgreen; color: white; width: 100px;">Edit</button>
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST["edit_buku"])) {
        $judul_buku = $_POST["judul_buku"];
        $tahun = $_POST["tahun_terbit"];
        $penulis = $_POST["penulis"];
        $penerbit = $_POST["penerbit"];

        $tanggal = date("Y-m-d H:i:s");

        $edit = q("UPDATE buku SET
        judul_buku = '$judul_buku',
        tahun_terbit = '$tahun',
        penulis = '$penulis',
        penerbit = '$penerbit',
        edit = '$tanggal'
        WHERE
        id = '$id_buku'");

        if ($edit) {
            echo "<script>
            alert('Edit buku berhasil');
            location='buku.php';
            </script>";
        }else {
            echo "<i>Edit gagal dilakukan</i>";
        }
    }
    ?>

</body>

</html>