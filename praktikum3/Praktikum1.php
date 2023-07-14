<!-- //Nama : Muhammad Ikhsan Mandirri
//NIm : 21104410070
//Kelas : TI P2K 2021
//Mata Kuliah : Praktikum Pemrograman Web -->

<!DOCTYPE html>
<html>

<head>
    <title>Tugas Praktikum - Koneksi dan baca database pada database yang dimiliki </title>
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
        <strong class="font-mono text-2xl font-bold ml-5 text-white"> KONEKSI DAN BACA DATABASE YANG DIMILIKI| PRAKTIKUM 1</strong>
    </div>

    <div class='ml-10 mt-10 text-2xl text-center'>
        <h1> <b> DATABASE TERSEDIA</b></h1>
        <?php
        // Melakukan Koneksi dan baca data database
        $serverName = "localhost";
        $username = "root";
        $password = "siber";
        $DbName = 'contoh';

        $connect = mysqli_connect($serverName, $username, $password, $DbName);

        //membaca database 
        if (!$connect) {
            die("Koneksi Gagal " . mysqli_connect_errno());
        }
        echo "Koneksi berhasil di buat";
        // $sql = "SELECT * FROM mahasiswa";
        // $result = mysqli_query($connect, $sql);
        // while ($row = mysqli_fetch_row($result)) {
        //     printf("%s (%s)\n", $row[0], $row[1]);
        // };

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