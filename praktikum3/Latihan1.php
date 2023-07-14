<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .identitas {
            background-color: #ffffff;
            padding: 10px;
            width: 100%;
            height: 100px;
            font-family: "Lucida Handwriting", "cursive", "Segoe Script";
            border-radius: 10px;
            align-items: center;
            display: flex;
            justify-content: center;
            margin-left: 0%;
            margin-right: 0%;
            margin-top: 3%;
            font-size: 30px;
            color: lime;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);

        }



        body {
            background-color: #5ce65e;
        }
    </style>
</head>

<body>


    <?php


    $serverName = "localhost";
    $username = "root";
    $password = "siber";

    $connect  = mysqli_connect($serverName, $username, $password, "contoh");
    if (!$connect) {
        die("Koneksi Gagal " . mysqli_connect_errno());
    }
    echo "Koneksi berhasil di buat";

    ?>

    <div class="identitas">
        <img src="./img/unisba.png" width="150" height="150">
        MUH IKHSAN MANDIRRI |
        21104410070
        | TI P2K 2021

    </div>
</body>

</html>