<!-- //Nama : Muhammad Ikhsan Mandirri
//NIm : 21104410070
//Kelas : TI P2K 2021
//Mata Kuliah : Praktikum Pemrograman Web -->

<!DOCTYPE html>
<html>

<head>
    <title>Tugas Praktikum - Koneksi dan baca database pada database yang tidak dimiliki </title>
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
        <strong class="font-mono text-2xl font-bold ml-5 text-white"> KONEKSI DAN BACA DATABASE YANG TIDAK DIMILIKI| PRAKTIKUM 1</strong>
    </div>

    <div class='ml-10 mt-10 text-2xl text-center'>
        <h1> <b> DATABASE YANG BELUM TERSEDIA</b></h1>


        <footer class="rounded bg-blue-800 absolute inset-x-0  bottom-0 ">

            <span class="block text-2xl text-white sm:text-center"> © 2023
                <a href="" class="hover:underline"><b>Muh Ikhsan M - 21104410070 - TI P2K 2021

                    </b></a></span>
    </div>
    </footer>
</body>


</html>
<?php

"Melakukan Koneksi Database yang belum tersedia ";
$serverName = "localhost";
$username = "root";
$password = "siber";
$DbName = 'mydb';
$connect  = mysqli_connect($serverName, $username, $password);
$db  = mysqli_select_db($connect, $DbName);
if (mysqli_connect_errno()) {
    echo "Failed to connect to mysql";
} else {
    echo "Succes to conected";
}
?>