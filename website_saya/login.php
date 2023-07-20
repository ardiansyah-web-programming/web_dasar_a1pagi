<?php require "controllers/functions.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <h1>Halaman Login</h1>
  <form action="" method="post">
    <table>
      <tr>
        <th>Username</th>
        <td>:</td>
        <td>
          <input type="text" placeholder="Input Username" name="username">
        </td>
      </tr>
      <tr>
        <th>Password</th>
        <td>:</td>
        <td>
          <input type="password" name="pw">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <button style="width: 100%;" name="login">Login</button>
        </td>
      </tr>
    </table>
  </form>

  <p>Anda belum punya akun? Registrasi <a href="registrasi.php">disini</a></p>

  <?php
  if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $pw = $_POST["pw"];
    if (user_satu_jumlah($username) > 0) {
      if (password_verify($pw, user_satu($username, "password"))) {
        echo "<script>
        alert('Password anda sesuai!')
        location='../website_saya/'
        </script>";
        session_start();
        $_SESSION["username"] = $username;
      } else {
        echo "<script>
        alert('Password tidak sesuai!')
        </script>";
      }
    } else {
      echo "<script>
      alert('Username tidak ditemukan!')
      </script>";
    }
  }
  ?>

</body>

</html>