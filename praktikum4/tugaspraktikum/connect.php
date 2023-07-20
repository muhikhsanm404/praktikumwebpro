<!-- //Nama : Muhammad Ikhsan Mandirri
//NIm : 21104410070
//Kelas : TI P2K 2021
//Mata Kuliah : Praktikum Pemrograman Web -->

<?php
$serverName = "localhost";
$username = "root";
$password = "siber";
$connect = mysqli_connect($serverName, $username, $password, "contoh");
if (!$connect) {
  die("Koneksi Gagal " . mysqli_connect_errno());
}
