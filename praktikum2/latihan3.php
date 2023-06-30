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
    <title>Latihan 3 - 21104410070</title>
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

        .selamat {
            font-weight: bold;
            margin-top: 3%;
            color: #00ff00;
            text-align: left;
            margin-left: 10%;
            font-size: xx-large;
            background: -webkit-linear-gradient(90deg, rgba(124, 244, 100, 1) 0%, rgba(252, 216, 0, 1) 68%, rgba(255, 64, 64, 1) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        body {
            background-color: black;
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

    function judul()
    {
        echo "<div class='selamat'";
        echo "<h2>Latihan 3 :</h2></br>";
    }
    judul();
    $matkul = array(
        "Praktikum Pemrograman Web",
        "Praktikum Sistem Operasi",
        "Praktikum Jaringan Komputer",
        "Rekayasa Perangkat Lunak",
        "Kewirausahaan II"
    );
    echo "Nama Matakuliah (sebelum diurutkan) <br>";
    foreach ($matkul as $key => $value) {
        echo "$key : $value .<br>";
    }
    sort($matkul);
    echo "Nama Mata Kuliah (setelah diurutkan) : <br>";
    foreach ($matkul as $key => $value) {
        echo "$key :$value .<br>";
    }

    ?>

</body>

</html>