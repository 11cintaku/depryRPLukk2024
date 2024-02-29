<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            
            background-image: url(https://cdn.pixabay.com/photo/2015/12/24/15/38/background-1106929_1280.jpg);
            background-size: cover;
            color: white;

        }
    </style>
    <center>
</head>
<body>

    <h1>Halaman Foto</h1>
    <p>Selamat Datang <b><?=$_SESSION['namalengkap']?></b></p>
    
   <tr>
        <td><button type="submit" class="btn btn-warning"><a href="foto.php">Foto</a></button></td>
        <td><button type="submit" class="btn btn-success"><a href="Album.php">Album</a></button></td>
        <td><button type="submit" class="btn btn-warning"><a href="logout.php">Logout</a></button></td>
   </tr>
    <br>

    <form action="tambah_foto.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Judul Foto</td>
                <td><input type="text" name="judulfoto"></td>
            </tr>
            <tr>
                <td>Deskripsi Foto</td>
                <td><input type="text" name="deskripsifoto"></td>
            </tr>
            <tr>
                <td>Lokasi File</td>
                <td><input type="file" name="lokasifile"></td>
            </tr>
            <tr>
                <td>Album</td>
                <td>
                    <select name="albumid">
                <?php
                    include "koneksi.php";
                    $userid=$_SESSION['userid'];
                    $sql=mysqli_query($conn, "select * from album where userid='$userid'");
                    while($data=mysqli_fetch_array($sql)){

                ?>
                <option value="<?=$data['albumid']?>"><?=$data['namaalbum']?></option>
                <?php
                    }
                ?>
                </select>
                </td>
            </tr>
            <tr>
                <td></td>
               <td> <button type="submit" class="btn btn-secondary">Tambah</button></td>
            </tr>
        </table>
    </form>
    <br>
    <table class="table-bordered" border="2" cellpaddin=5 cellspacing=0 style="width: 100%">
        <tr>
            <td style="color: black;">ID</td>
            <td style="color: black;">Judul</td>
            <td style="color: black;">Deskripsi</td>
            <td style="color: black;">Tanggal Unggah</td>
            <td style="color: black;">Lokasi File</td>
            <td style="color: black;">Album</td>
            <td style="color: black;">Aksi</td>
        </tr>
        <?php
            include "koneksi.php";
            $userid=$_SESSION['userid'];
            $sql=mysqli_query($conn, "select * from foto,album where foto.userid='$userid' and foto.
            albumid=album.albumid");
            while($data=mysqli_fetch_array($sql)){

        ?>
            <tr>
                <td style="color: black;"><?=$data['fotoid']?></td>
                <td style="color: black;"><?=$data['judulfoto']?></td>
                <td style="color: black;"><?=$data['deskripsifoto']?></td>
                <td style="color: black;"><?=$data['tanggalunggah']?></td>
                <td style="color: black;">
                    <img src="gambar/<?=$data['lokasifile']?>" width="200px">
                </td>
                <td style="color: black;"><?=$data['namaalbum']?></td>
                <td>
                    <a href="hapus_foto.php?fotoid=<?=$data['fotoid']?>">Hapus</a>
                    <a href="edit_foto.php?fotoid=<?=$data['fotoid']?>">Edit</a>
                </td>
            </tr>
        <?php
            }
        ?>

    </table>
    </center>
</body>
</html>