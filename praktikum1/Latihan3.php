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
    <title>Latihan 3</title>
    <style>
        .identitas {
            background: black;
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
            background: rgba(252, 216, 0, 1)
        }
    </style>
</head>

<body>

    <?php


    $nilai = 40;
    if ($nilai >= 60) {

        echo "Nilai Anda : $nilai. Selamat ,Anda anda telah lulus";
    } else {

        echo "Nilai Anda  : $nilai .Sorry ,And tidak lulus";
    }


    ?>

    <div class="identitas">
        <img src="./img/unisba.png" width="150" height="150">
        MUH IKHSAN MANDIRRI |
        21104410070
        | TI P2K 2021
    </div>



</body>

</html>