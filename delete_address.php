<?php

session_start();
require_once 'db_connection.php';
session_check();

//Mengambil nilai dari variabel $_SESSION['username'] dan disimpan dalam $username.
$username = $_SESSION['username'];
//Mengambil nilai id dari URL dan menyimpannya dalam variabel $id
$id = $_GET['id'];

// Query SQL untuk menghapus data dari tabel $username(nama tabel yg sesuai dengan username)  berdasarkan ID yang diberikan. 
$query = "DELETE FROM $username WHERE id=$id";
if (mysqli_query($mysqli, $query)) {
    header("Location: myaddress.php"); //Jika query berhasil dieksekusi, maka akan diarahkan kembali ke halaman myaddress.php
} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
}

mysqli_close($mysqli);
?>
