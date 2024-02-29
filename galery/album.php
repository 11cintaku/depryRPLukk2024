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
    <title>Halaman Album</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
         body{
            
            background-image: url(https://img.freepik.com/photos-gratuite/lay-plat-bureau-propre_23-2148219267.jpg);
            background-size: cover;
            color: black;


        }

    </style>
    </style>
    
</head>
<body>
<center>
    <h1>Halaman Album</h1>
    <p>selamat datang <b><?= $_SESSION['namalengkap'] ?></b></p>
        
    <tr>
    <td><button type="submit" class="btn btn-success"><a href="album.php">Album</a></button></td>
    <td><button type="submit" class="btn btn-warning"><a href="foto.php">Foto</a></button></td>
    <td><button type="submit" class="btn btn-success"><a href="logout.php">Logout</a></button></td>
     </tr>

    <form action="Tambah_album.php" method="post">
        <table>
            <tr>
                <td>Nama Album</td>
                <td><input type="text" name="namaalbum"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi"></td>
            </tr>
            
            <tr>
                <td></td>
                <td><button type="submit" class="btn btn-success">Tambah</button></td>
            </tr>
        </table>
    </form>
    <table class="table-bordered" border="2" cellpaddin=5 cellspacing=0>
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Deskripsi</td>
            <td>tanggaldibuat</td>
            <td>Aksi</td>
        </tr>
        <?php
        include "koneksi.php";
        $userid=$_SESSION['userid'];
        $sql=mysqli_query($conn,"select * from album where userid='$userid'");
        while($data=mysqli_fetch_array($sql)){
    ?>
    <tr>
         <td style="color: black;"><?=$data['albumid']?></td>
         <td><?=$data['namaalbum']?></td>
         <td><?=$data['deskripsi']?></td>
         <td><?=$data['tanggaldibuat']?></td>

         <td>
            <a href="hapus_album.php?albumid=<?=$data['albumid']?>">Hapus</a>
            <a href="edit_album.php?albumid=<?=$data['albumid']?>">Edit</a>
         </td>
    </tr>

     <?php
            
        }
       ?>
            
    </table>
    </center>
</body>
</html>