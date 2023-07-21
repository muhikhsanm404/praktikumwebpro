<?php
    unset($_COOKIE['username']); 
    setcookie('username', '', -1, '/'); 
    echo "Cookie Deleted";
    echo "Username ".$_COOKIE["username"];
    echo "<br><br> Nama : Muh Ikhsan M <br> NIM : 21104410070";
?>