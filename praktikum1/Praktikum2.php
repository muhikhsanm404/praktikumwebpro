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
    <title>Toko Emas Baru</title>
</head>
<?php

$beratEmas = $_POST['beratEmas'];
if ($beratEmas == null) {
    echo "Selamat Datang Toko Emas Baru";
}
?>

<body>
    <div class="flex items-center bg-blue-800">
        <img src="./img/gold.png" class="h-20 mr-3" style="margin-left: 50px;">
        <strong class="font-mono text-2xl font-bold pr-4 text-white">TOKO EMAS BARU | PRAKTIKUM 2 </strong>
    </div>
    <div class="m-10 grid grid-cols-2 gap-x-6 gap-y-8  ">
        <div class="sm:col-span-1">
            <label for="username" class="block text-sm font-medium leading-7 text-gray-900 ">Berat Emas</label>
            <div class="mt-2 ">
                <form action="Praktikum2.php
                " method="post">
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md ">
                        <input type="number" step="0.1" name="beratEmas" id="username" autocomplete="username" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Berat emas">
                    </div>
                    <input type="submit" value="Hitung" class="mt-10 block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 ">
                </form>

            </div>
        </div>

        <div class="border-4 border-indigo-200 border-b-indigo-500">
            Hasil Perhitungan : <br><br>
            <?php

            if ($beratEmas > 5) {
                echo "Selamat Anda mendapatkan cashback Rp.250.000";
            } else if ($beratEmas >= 1 && $beratEmas <= 5) {
                echo "Selamat Anda mendapatkan cashback Rp.200.000";
            } else if ($beratEmas >= 0.5 && $beratEmas <= 1) {
                echo "Selamat Anda mendapatkan cashback Rp.150.000";
            } else if ($beratEmas <= 0.5) {
                echo "Selamat Anda mendapatkan cashback Rp.100.000";
            } else {
                echo "Maaf Anda tidak mendapatkan diskon";
            }

            ?>
        </div>
    </div>

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