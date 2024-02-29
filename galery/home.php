<?php
    session_start();
    if (!isset($_SESSION['userid'])) {
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <style>
        body{
            
            background-image: url(https://img.freepik.com/free-photo/japandi-living-room-interior-design_53876-145502.jpg);
            background-size: cover;
            color: black;

        }
    </style>
</head>
<body>
    <center>
    <h1>Halaman Home</h1>
    <p>selamat datang<b><?= $_SESSION['namalengkap'] ?></b></p>
    <tr>
        <li><a href="album.php">album</a></li>
        <li><a href="logout.php">logout</a></li>
    </tr>
    </center>
</body>

</html>