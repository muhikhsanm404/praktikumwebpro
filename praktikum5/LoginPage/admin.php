<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dengan PHP</title>
</head>

<body>
    <h2>Halaman Login</h2>
    <br>
    <?php

    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:login.php?pesan=belum_login");
    }
    ?>
    <h4>Selamat datang , <?php echo $_SESSION['username']; ?> Anda Telah login</h4>
    <br>
    <br>
    <a href="logout.php">Logout</a>
    <p> Muh Ikhsan M (21104410070) </p>
</body>

</html>