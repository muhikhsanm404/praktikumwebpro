<?php

    $koneksi = mysqli_connect("localhost","root","siber","akademik");

    if(mysqli_connect_errno()){
        echo "Koneksi database gagal : ".mysqli_connect_errno();
    }
?>