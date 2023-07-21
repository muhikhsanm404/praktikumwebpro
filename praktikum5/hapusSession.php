<?php

    session_start();
    session_unset();
    session_destroy();

    echo "Usernama = ".$_SESSION['username'];
    echo "<br>";
    echo "Password = ".$_SESSION['password'];
    echo "<br> Nama : Muh Ikhsan M <br> NIM : 21104410070";

?>
