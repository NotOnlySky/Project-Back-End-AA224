<?php
session_start();
require_once 'db_connection.php';
session_check();
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
<body>

<video autoplay muted loop id="myVideo">
  <source src="./img/bg.mp4" type="video/mp4">
</video>

<nav id="homenav" class="nav nav-underline" >
<div class="navbar-brand">GOJO | Address Book</div>
  <li class="nav-item">
    <a class="nav-link" href="home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="myaddress.php">My Address</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="about.php">About Us</a>
  </li>
  <li class="nav-logout">
    <a class="fa-solid fa-arrow-right-from-bracket fa-lg" href="logout.php"></a>
  </li>
</nav>

<main class="home-main">
  <div class="home-content">
    <h1>WELCOME TO</h1>
    <h1><span>GOJO ADDRESS BOOK</span></h1>
    <p>Selamat datang <?php $username = $_SESSION['username']; echo "$username"; ?>, di GOJO Address Book. Solusi inovatif untuk mengelola kontak Anda dengan mudah dan efisien. 
      Dengan antarmuka yang intuitif, kami membantu Anda menyimpan, mengakses, dan mengatur semua informasi kontak Anda di satu tempat. 
      Jadikan pengelolaan alamat lebih sederhana dan aman bersama kami!</p>
  <div class="button"><a href="myaddress.php" class="btn btn-outline-primary">Get Started</a></div>
</div>
</main>

<footer class="text-center">
  <div class="container pt-4">
    <section class="mb-4">
      <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button"
        data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>
      <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button"
        data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>
      <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!"
        role="button" data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>
      <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button"
        data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>
      <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="https://github.com/NotOnlySky/Project_Backend_Buku_Alamat_AA224.git" role="button"
        data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
    </section>
  </div>

  <div class="text-center p-3">
    © 2024 Copyright:
    <a class="text-footer" href="#">GojoAddr.com</a>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
