<?php
session_start();
require_once 'db_connection.php';
session_check(true);

// Mengambil nilai username,password,confirm yang dikirim melalui method POST dan menyimpannya dalam variabel $username, $password, $confirm.
$username = $_POST['username'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];

// Menjalankan query SQL untuk mencari pengguna dengan username yang cocok di tabel user. Hasil query disimpan pada variabel $result.
$result = $mysqli->query("SELECT * FROM user WHERE username = '$username'");

// Memeriksa apakah $result sudah lebih dari nol. Jika iya, maka username sudah ada dalam database.
if($result->num_rows>0){
    $_SESSION['alert2'] = '<p class="alert2">username already exists !</p>'; // Menyimpan pesan kesalahan dalam variabel sesi $_SESSION['alert2'].
    header('Location:signup.php');
    exit;
}

// Memeriksa apakah password yang diinput sesuai dengan konfirmasi password.
if($password==$confirm){
    $hash = password_hash($password, PASSWORD_DEFAULT); //Meng-hash password menggunakan algoritma hash.

    //Menyiapkan perintah SQL untuk memasukkan username dan hashed password ke dalam tabel user.
    $query = "INSERT INTO user (username, password) VALUES ('$username', '$hash')";
    mysqli_query($mysqli, $query); // Menjalankan perintah SQL untuk memasukkan data pengguna baru ke dalam database.

    //Membuat tabel dengan nama yang sesuai dengan $username beserta atributnya.
    $newtable = "CREATE TABLE $username (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100),
        birthday DATE,
        phone VARCHAR(20),
        relationship VARCHAR(50),
        address VARCHAR(255),
        FOREIGN KEY (user_id) REFERENCES user(id) ON DELETE CASCADE)";
     //Menjalankan perintah SQL untuk membuat tabel beserta atribut baru ke dalam database.
    mysqli_query($mysqli, $newtable);
    //Menyimpan pesan sukses dalam variabel $_SESSION['succes'].
    $_SESSION['succes'] = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Successfully created an account!</strong> Please login first.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    header('Location: login.php');
    exit;
}

else{
    //Jika password dan konfirmasi password tidak cocok. Maka simpan pesan kesalahan dalam variabel $_SESSION['alert2'].
    $_SESSION['alert2'] = '<p class="alert2">password do not match !</p>';
    header('Location:signup.php');
    exit;
}
//Menutup koneksi ke database.
mysqli_close($mysqli);

?>