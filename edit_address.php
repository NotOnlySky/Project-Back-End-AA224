<?php

session_start();
require_once 'db_connection.php';
session_check();

//Mengambil nilai dari variabel $_SESSION['username'] dan disimpan dalam $username.
$username = $_SESSION['username'];
//Mengambil ID alamat dari parameter URL.
$id = $_GET['id'];

//Query SQL untuk mengambil semua data dari tabel $username(nama tabel yg sesuai dengan username) berdasarkan ID yang diberikan.
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
</head>
<body id="new-edit">
<img src="./img/gojonew.jpg">
<form action="edit_process.php" method="post">
    <div class="forms">
        <a href="myaddress.php" class="fa-solid fa-angle-left"></a>
        <h2>Edit Address</h2>
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="name" placeholder="Name" value="<?php echo $row['name']; ?>" required><br>
        <input type="email" name="email" placeholder="Email" value="<?php echo $row['email']; ?>" required><br>
        <input type="date" name="birthday" value="<?php echo $row['birthday']; ?>" required><br>
        <input type="text" name="phone" placeholder="Phone" value="<?php echo $row['phone']; ?>" required><br>
        <input type="text" name="relation" placeholder="Relationship" value="<?php echo $row['relationship']; ?>" required><br>
        <textarea name="address" placeholder="Address" required><?php echo $row['address']; ?></textarea><br>
        <button type="submit">Update Address</button>
    </form>
</div>
</body>
</html>
