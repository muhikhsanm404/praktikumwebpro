<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-success">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">
                Tugas Praktikum WebPro 5
            </a>
            <a class="navbar-brand text-white"> MUH IKHSAN M (21104410070) | TIP2K2021 </a>
        </div>
    </nav>

    <?php
    $pesan = "";
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            $pesan = "Login gagal ! username dan password salah";
            echo "<div class='alert alert-danger mt-4' role=alert'>
                $pesan
            </div>
            ";
        } elseif ($_GET['pesan'] == "logout") {
            $pesan = "Anda telah berhasil logout";
            echo "<div class='alert alert-danger mt-4' role=alert'>
            $pesan
        </div>
        ";
        } elseif ($_GET['pesan'] == "belum_login") {
            $pesan = "Anda harus login untuk mengakses halaman admin";
            echo "<div class='alert alert-danger mt-4' role=alert'>
            $pesan
        </div>
        ";
        }
    }

    ?>

    <section class="vh-100 mt-4 mb-4">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">

                    <img src="./img/unisba.png" class="img-fluid" alt="Unisba" width="400px" height="350px">

                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="cek_login.php" method="post">
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-bolder mb-3 me-2">Login Form</p>

                        </div>


                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Username</label>
                            <input type="text" id="form3Example3" class="form-control form-control-lg" name="username" placeholder="Username " />

                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Password</label>
                            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg" placeholder="Password" />

                        </div>

                        <div class="d-flex justify-content-between align-items-center">


                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        </div>
    </section>


    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: rgb(25, 135, 84)">


        <!-- Copyright -->
        <div class="text-center pt-4 container" style="background-color: rgb(25, 135, 84);">
            © 2023 Copyright:
            <a class="text-white" href=""> Muh Ikhsan M - 21104410070</a>
        </div>
        <!-- Copyright -->
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>