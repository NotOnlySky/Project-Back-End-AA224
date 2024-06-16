<?php

session_start();  //Digunakan untuk memulai sesi PHP
require_once 'db_connection.php'; // Berfungsi untuk memasukkan/mengeksekusi file db_connection.php 1x
session_check(); // Memanggil fungsi session_check

//Mengambil nilai dari variabel $_SESSION['username'] dan disimpan dalam $username.
$username = $_SESSION['username'];
//Mengambil ID alamat dari parameter URL.
$id = $_GET['id'];

//Query SQL untuk mengambil semua data dari tabel $username(nama tabel yang sesuai dengan $username) berdasarkan ID yang diberikan.
$query = "SELECT * FROM $username WHERE id=$id";
//Hasil query disimpan dalam variabel $result
$result = mysqli_query($mysqli, $query);
//Hasilnya dari $result disimpan dalam variabel $row.
$row = mysqli_fetch_assoc($result); 

//Menutup koneksi ke database.
mysqli_close($mysqli);
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
    <div id="address-table">
    <h1>Address Details</h1>
    <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Birthday</th>
                <th>Phone</th>
                <th>Relationship</th>
                <th>Address</th>
            </tr>
            <tr>
              <!-- Menampilkan detail alamat -->
                <td> <?php echo $row['id']; ?></td>
                <td> <?php echo $row['name']; ?></td>
                <td> <?php echo $row['email']; ?></td>
                <td> <?php echo $row['birthday']; ?></td>
                <td> <?php echo $row['phone']; ?></td>
                <td> <?php echo $row['relationship']; ?></td>
                <td> <?php echo $row['address']; ?></td>
            </tr>
    </table>
    <a class="back-to" href="myaddress.php">Back to Address List</a>
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
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</body>
</html>
