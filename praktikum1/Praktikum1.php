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
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Toko Bahagia</title>
</head>

<body>
    <div class="flex items-center bg-blue-800">
        <img src="./img/unisba.png" class="h-20 mr-3" style="margin-left: 50px;">
        <strong class="font-mono text-2xl font-bold ml-5 text-white"> TOKO BAHAGIA | PRAKTIKUM 1</strong>
    </div>


    <?php
    $totalBiaya = 175500;
    $diskon;
    if ($totalBiaya > 100000) {
        $totalBiaya = $totalBiaya - ($totalBiaya * (70 / 100));
        echo "<div class='ml-10 mt-48 text-4xl text-center'>";
        echo "Total Biaya yang harus dibayar adalah
            <b> Rp.$totalBiaya</b></div> ";
    }
    ?>

    <footer class="rounded bg-blue-800 absolute inset-x-0  bottom-0 ">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="" class="flex items-center ml-96 mb-4 sm:mb-0">
                    <img src="./img/unisba.png" class="h-20 mr-3" alt="Unisba Logo" />
                    <span class="text-2xl font-semibold whitespace-nowrap dark:text-white">Praktikum Web Pemrograman</span>

                </a>

            </div>
            <hr class="my-6 bold border-white-200 sm:mx-auto dark:border-white-700 lg:my-8" />
            <span class="block text-2xl text-white sm:text-center"> © 2023 <a href="" class="hover:underline"><b>Muh Ikhsan M - 21104410070 - TI P2K 2021

                    </b></a></span>
        </div>
    </footer>
</body>

</html>