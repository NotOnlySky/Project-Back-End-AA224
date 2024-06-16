<?php
session_start();
require_once 'db_connection.php';
session_check(true);

//Mengambil nilai username dan password yang dikirim melalui method POST dari login.php dan menyimpannya dalam variabel $username dan $password.
$username = $_POST['username']; 
$password = $_POST['password'];

//Menjalankan query SQL untuk mencari username yang cocok di tabel user. Hasil query disimpan dalam variabel $result.
$result = $mysqli->query("SELECT * FROM user WHERE username = '$username'");

//Memerika apakah username tersebut ada
if($result->num_rows===1) {
  $user = $result->fetch_assoc(); // Jika ada, maka ambil data user

//Memverifikasi password yang diinput pengguna dengan password yang tersimpan di database dalam bentuk hash.
  if(password_verify($password, $user['password'])) {
//Menyimpan username & id dalam variabel $_SESSION
    $_SESSION['username'] = $username;
    $_SESSION['id'] = $user['id']; 
    
    header('Location: home.php'); // Mengarahkan pengguna ke halaman home.php setelah login berhasil.
    exit; //menghentikan skrip saat ini
  }
}
  //Jika login gagal, menyimpan pesan kesalahan dalam variabel session. Lalu mengarahkan ke halaman login.php.
  $_SESSION['alert1'] = '<p class="alert1">incorrect username/password !</p>';
  header('Location: login.php');
  exit;

?>