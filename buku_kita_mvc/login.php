
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
    include "nav.php";
    echo"<br><br>"
    ?>
    <div class="regis">
      <center>
        <h1>Login</h1>
        <form action="loginn.php" method="post">
            <label>Nama</label>
            <input type="text" autocomplete="off" name="nama" required>
            <label>Username</label>
            <input type="text" autocomplete="off" name="username" required>
            <label>Password</label>
            <input type="password" autocomplete="off" name="password" required>
            <input type="submit" name="" value="Submit">
        </form>
        <!-- <p>Silahkan Registrasi jika tidak mempunyai akun <a href="index.php">Registrasi</a></p> -->
    </div>
</center>
<?php
    include('footer.php')
    ?>
</body>
</html>