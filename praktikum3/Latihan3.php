<?php

require "Latihan1.php";
echo "<br>";

$sql = "CREATE DATABASE latihan3";
if (mysqli_query($connect, $sql)) {
    echo "Database berhasil dibuat";
} else {
    echo "database gagal dibuat";
}
