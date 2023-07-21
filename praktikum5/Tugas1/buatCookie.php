<?php
    echo "INI TAMPILAN COOKIE";
    echo "<br>";
    setcookie('namaMahasiswa','administrator',time()+(60*60*24*5),'/');
    setcookie('nimMahasiswa','Budi Nurcahya',time()+(60*60*24*15),'/');
    echo "Username ".$_COOKIE['namaMahasiswa'];
    echo "<br>";
    echo "Nama".$_COOKIE['nimMahasiswa'];
    echo "<br> Nama : Muh Ikhsan M <br> NIM : 21104410070";
?>
