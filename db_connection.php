<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'address_book';

//Membuat objek mysqli untuk melakukan koneksi ke database, lalu disimpan pada variabel $mysqli.
$mysqli = new mysqli($host, $username, $password, $database);

//Jika koneksi gagal, maka pesan kesalahan akan ditampilkan.
if (!$mysqli) {
    die("Koneksi gagal " . mysqli_connect_error());
}

require_once 'session.php';
?>
