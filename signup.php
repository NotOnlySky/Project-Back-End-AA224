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
</head>
<body id="login-img" style="background-color:#000">
<img src="./img/Gojo_login.png">
<main class="signup-main">
<form action="signup_process.php" method="post">
      <div class="forms">
      <a href="index.php" class="fa-solid fa-angle-left"></a>
        <h2>Sign Up</h2>
        <label for="input-username">Username</label>
        <input type="text" name="username" id="input-username" autofocus required>
        <label for="input-password">Password</label>
        <input type="password" name="password" id="input-password" required>
        <label for="confirm-password">Confirm Password</label>
        <input type="password" name="confirm" id="confirm-password" required>
        <div class="alert-form"><?php
        //Memeriksa apakah $_SESSION['alert2'] sudah diset (signup_process.php) 
        if(isset($_SESSION['alert2'])) { 
          echo $_SESSION['alert2']; //Mencetak nilai dari $_SESSION['alert2]
          unset($_SESSION['alert2']); //Menghapus $_SESSION['alert2] setelah mencetaknya
        }
        ?></div>
        <button type="submit">Create Account</button>
        <p>Already have an account? <a href="login.php">Login</a></p>
      </div>
    </form>
</main>
</body>
</html>