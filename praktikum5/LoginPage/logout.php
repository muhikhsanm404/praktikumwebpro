<?php

    // mengaktifkan session
    session_start();

    // menghapus semua sesion
    session_destroy();

    // mengalihkan halaman sambil mengirim pesan logout
    header("location:login.php?pesan=logout");

?>