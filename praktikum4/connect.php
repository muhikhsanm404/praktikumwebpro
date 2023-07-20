<?php

$serverName = "localhost";
$username = "root";
$password = "siber";

$connect  = mysqli_connect($serverName, $username, $password, "contohdb");
if (!$connect) {
    die("Koneksi Gagal " . mysqli_connect_errno());
}
