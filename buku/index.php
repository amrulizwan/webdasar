<?php
session_start();
if(!$_SESSION['login']){
    header('location: auth/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h3>Halaman Utama</h3>
    </center>
    <ul>
        <li><a href="penerbit/tampil.php">Halaman Penerbit</a></li>
        <li><a href="penulis/tampil.php">Halaman Penulis</a></li>
    </ul>
</body>

</html>