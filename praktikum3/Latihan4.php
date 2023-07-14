<!-- membuat Datable -->
<?php

require "Latihan1.php";
echo "<br>";

$sql = "CREATE TABLE biodata (
        id INT(20) NOT NULL PRIMARY KEY,
        nama VARCHAR(30),
        age INT(20)
    )";
if (mysqli_query($connect, $sql)) {
    echo "Tabel Berhasil dibuat";
} else {
    echo "Tabel gagal dibuat";
}
?>