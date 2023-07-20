<?php require "controllers/functions.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
</head>

<body>
  <h1>Halaman Registrasi</h1>
  <form action="" method="post">
    <table>
      <tr>
        <th>Username</th>
        <td>:</td>
        <td>
          <input type="text" placeholder="Input Username" name="username" value="<?= @$_POST["username"]; ?>">
        </td>
      </tr>
      <tr>
        <th>Email</th>
        <td>:</td>
        <td>
          <input type="email" placeholder="Input Email" name="email" value="<?= @$_POST["email"]; ?>">
        </td>
      </tr>
      <tr>
        <th>Password</th>
        <td>:</td>
        <td>
          <input type="password" name="pw1" value="<?= @$_POST["pw1"]; ?>">
        </td>
      </tr>
      <tr>
        <th>Confirm Password</th>
        <td>:</td>
        <td>
          <input type="password" name="pw2" value="<?= @$_POST["pw2"]; ?>">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <button type="submit" style="width: 100%;" name="registrasi">Registrasi</button>
        </td>
      </tr>
    </table>
  </form>

  <?php
  if (isset($_POST["registrasi"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pw1 = $_POST["pw1"];
    $pw2 = $_POST["pw2"];
    if ($username == "") {
      echo "<script>
    alert('Username masih kosong!')
    </script>";
    } elseif ($email == "") {
      echo "<script>
    alert('Email masih kosong!')
    </script>";
    } elseif ($pw1 == "") {
      echo "<script>
    alert('Password masih kosong!')
    </script>";
    } elseif ($pw1 != $pw2) {
      echo "<script>
    alert('Confirm Password tidak sesuai!')
    </script>";
    } else {
      if (user_satu_jumlah($username) > 0) {
        echo "<script>
        alert('Username sudah ada sebelumnya')
        </script>";
      } else {
        $encrypt_pw = password_hash($pw1, PASSWORD_DEFAULT);
        $tanggal_hari_ini = date("Y-m-d H:i:s");
        $simpan_registrasi = q("INSERT INTO user VALUES(null,
        '$username',
        '$email',
        '$encrypt_pw',
        '$tanggal_hari_ini','$tanggal_hari_ini','')");
        if ($simpan_registrasi) {
          echo "<script>
          alert('Registrasi Anda Berhasil!')
          location='login.php'
          </script>";
        } else {
          echo "<script>
          alert('Registrasi Anda Gagal')
          location='login.php'
          </script>";
        }
      }
    }
  }
  ?>

</body>

</html>