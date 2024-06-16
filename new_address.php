<?php
session_start();
require_once 'db_connection.php';
session_check();
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
    <form action="new_address_process.php" method="post">
        <div class="forms">
            <a href="myaddress.php" class="fa-solid fa-angle-left"></a>
            <h2>Add New Address</h2>
            <label for="Name">Name</label>
            <input type="text" name="name" placeholder="Name" required><br>
            <label for="Email">Email</label>
            <input type="email" name="email" placeholder="Email" required><br>
            <label for="birthday-input">Birthday</label>
            <input type="date" name="birthday" id="birthday-input" required><br>
            <label for="Phone">Phone</label>
            <input type="text" name="phone" placeholder="Phone" required><br>
            <label for="relationship">Relationship</label>
            <input type="text" name="relation" placeholder="Relationship" required><br>
            <label>Address</label>
            <textarea name="address" placeholder="Address" required></textarea><br>
            <button type="submit">Add Address</button>
        </div>
    </form>
</body>
</html>