<?php
session_start();  //Digunakan untuk memulai sesi PHP
require_once 'db_connection.php'; // Berfungsi untuk memasukkan/mengeksekusi file db_connection.php 1x
session_check(); // Memanggil fungsi session_check
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
<nav class="nav nav-underline" style="background-color: #0a0a0a;">
<div class="navbar-brand">GOJO | Address Book</div>
  <li class="nav-item">
    <a class="nav-link" href="index.php">Home</a>
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

<main>
<div class="about-us">
<h1>About Us</h1>
<p>Selamat Datang di Buku Alamat Digital Kami. Di era digital yang serba cepat ini, mengelola dan menyimpan kontak dengan cara tradisional bisa menjadi tantangan tersendiri. 
Kami hadir untuk memberikan solusi praktis dan modern melalui Buku Alamat Digital.
Misi kami adalah untuk menyederhanakan hidup Anda dengan menyediakan platform yang mudah digunakan untuk menyimpan, mengelola, dan mengakses kontak penting Anda kapan saja dan di mana saja.
Kami percaya bahwa teknologi seharusnya mempermudah hidup Anda, bukan sebaliknya.Visi Kami untuk menjadi platform manajemen kontak terdepan yang memberikan pengalaman pengguna terbaik.
Dengan terus berinovasi dan memperbarui fitur-fitur kami, kami bertujuan untuk memenuhi kebutuhan pengguna yang terus berkembang di dunia digital. Terima kasih telah memilih GOJO Address Book. 
Mari bersama-sama menyederhanakan cara Anda mengelola kontak!</p>
<h1>Our Team</h1>
<div class="foto-kelompok">
        <div class="profil">
            <img src=.\img\deo.jpeg>
            <h5>Adriel Amadeo Octapianus </h5>
            <p>220040030</p>
        </div>
        <div class="profil">
            <img src=.\img\rai.jpeg>
            <h5>Gusti Made Rai Andika Pratama</h5>
            <p>220040067</p>
        </div>
        <div class="profil">
            <img src=.\img\yogi.jpeg>
            <h5>I Gusti Made Yogi Bajra Astawa</h5>
            <p>220040080</p>
        </div>
        <div class="profil">
            <img src=.\img\dayana.jpeg>
            <h5>Komang Agus Udayana</h5>
            <p>220040090</p>
        </div>
    </div>
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
