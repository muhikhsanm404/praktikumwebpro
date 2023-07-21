<?php

    

    include 'connect.php';
    session_start();
    // menagkap data yang dikirm dari form
    if(!empty($_POST)){
        $username = $_POST["username"];
        $password = $_POST["password"];
    }
    // meyeleksi data admin dengan username dan apssword yang sesuai
    $data = mysqli_query($koneksi,"SELECT * FROM akun WHERE username = '$username' AND password='$password'");

    // menghitung jumplah data yang ditemukan 

    $cek = mysqli_num_rows($data);
    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:admin.php");
    }
    else {
        header("location:login.php?pesan=gagal");
    }

?>