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
    <title>Latihan 1.2 - 21104410070</title>
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
            margin-top: 10%;
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
        echo "<h2> Nama nama Hari : </h2> </br>";
    }
    judul();
    $hari = array();  //Pada modul harus menambhakn variabel array yang bernama hari karena penentuan value array tidak bisa dilakukan jika variabel array belum di deklrasikan;
    $hari[0] = "Senin";
    $hari[1] = "Selasa";
    $hari[2] = "Rabu";
    $hari[3] = "Kemis";
    $hari[4] = "Jum'At";
    $hari[5] = "Sabtu";
    $hari[6] = "Minggu";
    echo "<br> Daftar nama-nama hari : <br>";
    echo "$hari[0] " . "<br>";
    echo "$hari[1] " . "<br>";
    echo "$hari[2] " . "<br>";
    echo "$hari[3] " . "<br>";
    echo "$hari[4] " . "<br>";
    echo "$hari[5] " . "<br>";
    echo "$hari[6] " . "<br>";
    ?>
</body>

</html>