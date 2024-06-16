<?php

session_start();
require_once 'db_connection.php';
session_check();

//Mengambil nilai dari variabel $_SESSION['username'] dan disimpan dalam $username.
$username = $_SESSION['username'];

// Mengambil nilai id, name, email, birthday, phone, relation, address yg dikirim dengan method POST dari edit_address.php dan menyimpannya dalam suatu variabel.
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$phone = $_POST['phone'];
$relation = $_POST['relation'];
$address = $_POST['address'];

// Query SQL untuk memperbarui data pada tabel $username(nama tabel yang sesuai dengan nama username) berdasarkan ID yg diberikan.
$query = "UPDATE $username SET name='$name', email='$email', birthday='$birthday', phone='$phone', relationship='$relation', address='$address' WHERE id=$id";
//Jika query berhasil dieksekusi, maka akan diarahkan kembali ke halaman myaddress.php
if (mysqli_query($mysqli, $query)) {
    header("Location: myaddress.php");
} else {
    echo "Error: " . mysqli_error($mysqli);
}

mysqli_close($mysqli);
?>
