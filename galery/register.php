<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            color: red;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<center>
    <h1>Halaman Registrasi</h1>
    <form action="proses_register.php" method="post">
        <table>
            
            <p>Username</p>
            <tr>
                <input type="text" name="username">
            </tr>
            
            <p>Password</p>
            <tr>
                <input type="text" name="password">
            </tr>
            
            <p>Email</p>
            <tr>
                <input type="email" name="email">
            </tr>
            
            <p>Nama Lengkap</p>
            <tr>
                <input type="text" name="namalengkap">
            </tr>
            
            <p>Alamat</p>
            <tr>
                <input type="text" name="alamat">
            </tr>
            <tr>
                <p></p>
                <button type="submit" class="btn btn-primary">Register</button>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>