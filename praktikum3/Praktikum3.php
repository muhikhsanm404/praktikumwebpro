<!-- //Nama : Muhammad Ikhsan Mandirri
//NIm : 21104410070
//Kelas : TI P2K 2021
//Mata Kuliah : Praktikum Pemrograman Web -->

<!DOCTYPE html>
<html>

<head>
    <title>Tugas Praktikum - Tabel Mahasiswa </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body>
    <div class="flex items-center bg-blue-800">
        <img src="./img/unisba.png" class="h-20 mr-3" style="margin-left: 50px;">
        <strong class="font-mono text-2xl font-bold ml-5 text-white"> TABEL MAHASISWA | PRAKTIKUM 1</strong>
    </div>

    <div class='ml-10 mt-10 text-2xl text-center'>
        <h1> <b> TABEL MAHASISWA </b></h1>
        <?php

        $serverName = "localhost";
        $username = "root";
        $password = "siber";

        $connect  = mysqli_connect($serverName, $username, $password, "contoh");
        $sql = "CREATE TABLE Mahasiswa (
            nim INT(20) NOT NULL PRIMARY KEY ,
            nama CHAR(50) NOT NULL,
            alamat VARCHAR(50) NOT NULL,
            jenis_kelamin CHAR(1) NOT NULL,
            umur INT(10) NOT NULL,
            email VARCHAR(50) NOT NULL
        )";
        if (!$connect || !mysqli_query($connect, $sql)) {
            die("Koneksi Gagal " . mysqli_connect_errno());
        } else {
            echo "Koneksi berhasil di buat" . "<br>";
            echo "Tabel Berhasil dibuat";
        }


        ?>
        <footer class="rounded bg-blue-800 absolute inset-x-0  bottom-0 ">

            <span class="block text-2xl text-white sm:text-center"> © 2023
                <a href="" class="hover:underline"><b>Muh Ikhsan M - 21104410070 - TI P2K 2021

                    </b></a></span>
    </div>
    </footer>
</body>


</html>

</html>