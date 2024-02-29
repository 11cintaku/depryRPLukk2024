<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            
            background-image: url(gambar/810048263_sky-anime-night-scenery-hd-wallpaper-preview.jpg);
            background-size: cover;
            color: white;

        }
    </style>
</head>
<body>
    <center>
    <h1>Halaman Login</h1>
    <form action="proses_login.php" method="post">
        <table>
               <p>Username</p>
            <tr>
                <input type="text" name="username">
            </tr>
            
            <p>Password</p>
            <tr>
                <input type="text" name="password">
            </tr>
            <tr>
                <p></p>
                <td><button type="submit" class="btn btn-info">Login</button></td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>