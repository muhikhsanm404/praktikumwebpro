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
    <title>Latihan 5 - 21104410070</title>
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
            color: #ffffff;
            text-align: center;
            margin-left: 10%;
            font-size: xx-large;
        }

        body {
            background-color: black;
        }


        .table1,
        th,
        td {
            border: 1px solid #06ff00;
            padding: 8px 20px;
            font-family: sans-serif;
            color: #ffffff;
            border-collapse: collapse;
        }

        tr.color {
            color: red;
            background-color: darkblue;
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

    <table border="1" align="center">
        <tr class="color">
            <td>Nama</td>
            <td>Jurusan</td>
            <td>Jenis Kelamin</td>
            <td>Usia</td>
        </tr>
        <?php
        echo "<div class='selamat'";
        $mahasiswa = array(
            array("Fitri", "Teknik Komputer", "Perempuan", 20),
            array("Nizam", "Sistem Komputer", "Laki-Laki", 20),
            array("Vina", "Bahasa Inggris", "Perempuan", 24),
            array("Ma'Ruf", "Agribisnis", "Laki-Laki", 20),
            array("Nia", "Manajemen", "Permpuan", 24)
        );
        for ($row = 0; $row < 5; $row++) {
            echo "<tr>";
            for ($col = 0; $col < 4; $col++) {
                echo "<td>" . $mahasiswa[$row][$col] . "</td>";
            }
            echo "<tr>";
        }

        ?>

    </table>

</body>

</html>