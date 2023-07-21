<?php
    session_start();
    $_SESSION['namaMahasiswa'] = "Muh Ikhsan M";
    $_SESSION["Nim"] = "21104410070";

    echo "Usernama = ".$_SESSION['namaMahasiswa'];
    echo "<br>";
    echo "Password = ".$_SESSION['Nim'];
?>