<!-- //Nama : Muhammad Ikhsan Mandirri
//NIm : 21104410070
//Kelas : TI P2K 2021
//Mata Kuliah : Praktikum Pemrograman Web -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 - Welcome</title>
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
            font-size: 40px;
            color: lime;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);

        }

        body {
            background-color: black;
        }

        .selamat {
            font-weight: bold;
            margin-top: 10%;
            color: #00ff00;
            text-align: center;
            font-size: xx-large;
            background: -webkit-linear-gradient(90deg, rgba(124, 244, 100, 1) 0%, rgba(252, 216, 0, 1) 68%, rgba(255, 64, 64, 1) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body>

    <div class="identitas">
        <img src="./img/unisba.png" width="150" height="150">
        MUH IKHSAN MANDIRRI |
        21104410070
        | TI P2K 2021
    </div>

    <?php
    $nama = $_POST['nama'];
    echo "<div class='selamat'";
    echo "<b> Selamat Datang ! ,$nama </b>" . "<br>";
    echo "Hari ini tanggal : " . date("d F Y");
    ?>

</body>

</html>