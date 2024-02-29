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
    <title>Halaman  Edit Album</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
         body{
            
            background-image: url(https://img.freepik.com/free-photo/office-desk-workspace-bright-color-yellow-background_169016-38713.jpg);
            background-size: cover;
            color:  Blue;

        }
    </style>
</head>
<body>
    <center>
    <h1>Halaman Edit Album</h1>
    <p>selamat datang <b><?= $_SESSION['namalengkap'] ?></b></p>

    <tr>
        <td><button type="submit" class="btn btn-warning"><a href="foto.php">Foto</a></button></td>
        <td><button type="submit" class="btn btn-success"><a href="logout.php">Logout</a></button></td>
    </tr>
    <p></p>

    <form action="update_album.php" method="post">
        <?php
            include "koneksi.php";
            $albumid=$_GET['albumid'];
            $sql=mysqli_query($conn,"select * from album where albumid='$albumid'");
                while($data=mysqli_fetch_array($sql)){
            ?>
            <input type="text" name="albumid" value="<?=$data['albumid']?>" hidden>
        <table>
            <tr>
                <td>Nama Album</td>
                <td><input type="text" name="namaalbum" value="<?=$data['namaalbum']?>"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi" value="<?=$data['deskripsi']?>"></td>
            </tr>
            
            <tr>
                <td></td>
                <td><button type="submit" class="btn btn-warning">Ubah</button></td>
            </tr>
        </table>
        <?php
            }
            ?>
    </form>
    </center>   
</body>
</html>