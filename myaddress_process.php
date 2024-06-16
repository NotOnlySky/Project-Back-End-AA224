<?php

require_once 'db_connection.php';
session_check();

//Mengambil nilai dari variabel $_SESSION['username'] dan disimpan dalam $username.
$username = $_SESSION['username'];

//Memeriksa apakah parameter search ada dalam URL dan tidak kosong.
if(isset($_GET['search']) && !empty($_GET['search'])){
    //Mengambil nilai search dari URL dan menyimpannya dalam variabel $search
    $search = $_GET['search'];
    //Membuat query SQL untuk mencari data yang cocok dengan kata kunci search di salah satu kolom (id, name, email, phone, atau address).
    $query = "SELECT id, name, email, phone, address FROM $username WHERE id LIKE '%$search%' OR name LIKE '%$search%' OR email LIKE '%$search%' OR phone LIKE '%$search%' OR address LIKE '%$search%'";
} else {
    // Jika parameter search tidak ada atau kosong, maka membuat query SQL untuk mengambil semua data dari tabel $username(tabel yang sesuai dengan username).
    $query = "SELECT id, name, email, phone, address FROM $username";
}

// Memeriksa apakah parameter sort ada dalam URL
//Jika 'sort' adalah 'name', maka hasil query akan diurutkan berdasarkan nama secara ascending.
if (isset($_GET['sort']) && $_GET['sort'] == 'name') {
    $query .= " ORDER BY name ASC";
}
//Jika 'sort' adalah 'id', maka hasil query akan diurutkan berdasarkan id secara ascending.
if (isset($_GET['sort']) && $_GET['sort'] == 'id') {
    $query .= " ORDER BY id ASC";
}

//Menjalankan query SQL yang sudah dibuat dan menyimpan hasilnya dalam variabel $result.
$result = mysqli_query($mysqli, $query);

// Memeriksa apakah ada baris hasil dari query.
if (mysqli_num_rows($result) > 0) { 
    //Mengambil setiap baris hasil query dan memprosesnya dalam loop.
    while ($row = mysqli_fetch_assoc($result)) { 
        //Memeriksa panjang string address. Jika lebih dari 20 karakter, maka memotongnya dan menambahkan ...
        $address = (strlen($row['address']) > 20) ? substr($row['address'], 0, 20) . '...' : $row['address'];
        //Membuat struktur tabel dan menampilkan datanya sesuai database
        echo "<tr class='address-tr'>";
        echo "<td>" . $row['id'] . "</td>"; 
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>" . $address . "</td>";
        $icon_book = "fa-solid fa-book fa-lg";
        $icon_edit = "fa-solid fa-pen-to-square fa-lg";
        $icon_delete = "fa-solid fa-trash-can fa-lg";
        echo "<td><a class='$icon_book' href='address_details.php?id=" . $row['id'] . "'></a> 
        <a class='$icon_edit' href='edit_address.php?id=" . $row['id'] . "'></a>
        <a class='$icon_delete' href='delete_address.php?id=" . $row['id'] . "' onclick='return confirmDel()'></a></td>";
        echo "</tr>";
    }
} 
//Memeriksa apakah tabel kosong dan parameter search tidak ada, 
if (mysqli_num_rows($result) == 0 && !isset($_GET['search'])) {
    //Menyimpan pesan peringatan dalam variabel $_SESSION['empty'] yang akan ditampilkan pada myaddress.php bahwa data masih kosong.
    $_SESSION['empty'] = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Address data is still empty.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}

mysqli_close($mysqli);

?>
