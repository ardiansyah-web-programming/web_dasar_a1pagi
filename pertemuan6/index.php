<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hyperlink</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
    <h1>Indexed Arrays</h1>

    <ul>
        <li>
            <a href="index.php">Indexed Arrays</a>
        </li>
        <li>
            <a href="aa.php">Associative Arrays</a>
        </li>
        <li>
            <a href="ma.php">Multidimensional Arrays</a>
        </li>
    </ul>

    <?php
        $produk = array("Samsung","Acer","MSI");
        $jumlah_produk = count($produk);
        // var_dump($produk);
    ?>
    <table class="table table-sm table-bordered table-dark" style="border-collapse: collapse">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
        </tr>
        <!-- Menggunakan for pada array -->
        <?php 
        for ($i=0; $i < $jumlah_produk; $i++) { ?>
        <tr>
            <td><?= $i+1; ?></td>
            <td><?= $produk[$i]; ?></td>
        </tr>
        <?php } ?>

        <!-- 
        Menampilkan data array secara manual dengan index nya    
        <tr>
            <td>1</td>
            <td><?//= $produk[0]; ?></td>
        </tr> -->
    </table>
</body>
</html>