<?php
session_start();
require_once 'db_connection.php';
session_check(true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOJO Address Book</title>
    <link rel="icon" type="image/x-icon" href="./img/Gojo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body id="login-img" style="background-color:#000">
<img src="./img/Gojo_login.png">
<main>
  <?php
  //Memeriksa apakah $_SESSION['succes'] sudah di-set (signup_process.php)
        if(isset($_SESSION['succes'])) {
          echo $_SESSION['succes']; //Jika $_SESSION['succes'] sudah di-set, baris ini akan mencetak nilainya
          unset($_SESSION['succes']); // Menghapus variabel sesi $_SESSION['succes'].
        }
        ?>
    <form action="validasi.php" method="post">
      <div class="forms">
        <a href="index.php" class="fa-solid fa-angle-left"></a>
        <h2>Login</h2>
        <label for="input-username">Username</label>
        <input type="text" name="username" id="input-username" autofocus required>
        <label for="input-password">Password</label>
        <input type="password" name="password" id="input-password" required>
        <div class="alert-form"><?php
        //Memeriksa apakah variabel $_SESSION['alert1'] sudah diset (validasi.php) 
        if(isset($_SESSION['alert1'])) {
          echo $_SESSION['alert1']; //Mencetak nilai dari $_SESSION['alert1]
          unset($_SESSION['alert1']); //Menghapus $_SESSION['alert1] setelah mencetaknya
        }?></div>
        <button type="submit">Login</button>
        <p>Don't have an account? <a href="signup.php">Register</a></p>
      </div>
    </form>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
  crossorigin="anonymous"></script>
</body>
</html>