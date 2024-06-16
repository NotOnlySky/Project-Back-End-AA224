<?php
session_start();
require_once 'db_connection.php';
//Menghapus variabel sesi $_SESSION['username']. 
unset($_SESSION['username']);
//Mengarahkan pengguna kembali ke halaman index.php
header('Location: index.php');
exit;

?>