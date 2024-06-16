<?php

session_start();
require_once 'db_connection.php';
session_check();

////Mengambil nilai dari variabel $_SESSION['username'] dan disimpan dalam $username.
$username = $_SESSION['username'];

//Mengambil nilai name, email, birthday, phone, relation, address yang dikirim melalui method POST pada new_address.php dan menyimpannya dalam variabel.
$name = $_POST['name'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$phone = $_POST['phone'];
$relation = $_POST['relation'];
$address = $_POST['address'];

//Membuat query SQL untuk menyimpan data ke dalam tabel $username(tabel yang sesuai dengan session username) dan kemudian menjalankan query tersebut.
$query = "INSERT INTO $username (user_id ,name, email, birthday, phone, relationship, address) VALUES ( (SELECT id FROM user WHERE username = '$username'), '$name', '$email','$birthday', '$phone','$relation', '$address')";
if (mysqli_query($mysqli, $query)) {
    echo "Berhasil menambahkan alamat";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
}

unset($_SESSION['empty']);

mysqli_close($mysqli);

header('Location:myaddress.php')
?>
