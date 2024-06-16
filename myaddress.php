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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script>
        function confirmDel() {
            return confirm('Apakah anda yakin ingin menghapus alamat ini?');
        }
    </script>
</head>
<body>
<div class="alertss"><?php
        //Memeriksa apakah  $_SESSION['empty'] sudah di-set (myaddress_process.php)
        if(isset($_SESSION['empty'])) {
          echo $_SESSION['empty']; //Jika $_SESSION['empty'] sudah di-set, baris ini akan mencetak nilainya
          unset($_SESSION['empty']); //Menghapus variabel sesi $_SESSION['empty'].
        }?></div>
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
  <form class="d-flex" role="search" action="myaddress.php" method="GET">
    <input class="form-control me-2" type="search" name="search" placeholder="Search Name" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>
  <li class="nav-logout">
    <a class="fa-solid fa-arrow-right-from-bracket fa-lg" href="logout.php"></a>
  </li>
</nav>

<main>
  <div id="address-table">
      <h1>Address List</h1>
    <a href="myaddress.php?sort=name" class="fa-solid fa-arrow-down-a-z fa-lg"></a>
    <a href="myaddress.php?sort=id" class="fa-solid fa-arrow-down-1-9 fa-lg"></a>
        <a href="new_address.php" class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i> New Address</a>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Details | Edit | Delete</th>
            </tr>
            <!--Menyertakan dan mengeksekusi kode dari file myaddress_process.php ke pada halaman saat ini -->
            <?php include 'myaddress_process.php'; ?>
        </table>
    </div>
</main>

<footer class="text-center">
  <div class="container pt-4">
    <section class="mb-4">
      <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button"
        data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>
      <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button"
        data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>
      <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button" 
        data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>
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
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</body>
</html>
