<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dengan PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <?php
    session_start();
    if ($_SESSION["status"] != "login") {
        header("location:login.php?pesan=belum_login");
    }
    ?>
    <?php
    require "connect.php";
    if (!empty($_POST)) {
        $nimMahasiswa = $_POST["nim_mahasiswa"];
        $namaMahasiwa = $_POST["nama_mahasiswa"];
        echo $nimMahasiswa;
        echo $namaMahasiwa;
        $sql = "INSERT INTO mahasiswa (nimMahasiswa, namaMahasiswa) VALUES ('$nimMahasiswa','$namaMahasiwa')";
        mysqli_query($koneksi, $sql);
    }
    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary d-flex justify-content-between bg-body-tertiary">

        <p class="fw-bold fs-4 p-1">Selamat Datang di Website Kami</p>
        <p class="fw-bold p-3">
            Hello ,
            <?php echo $_SESSION["username"]; ?>
        </p>

    </nav>
    <div class="col container text-center mt-4">
        <p>Daftar Nama Mahasiswa</p>
        <div class="container text-center ">
            <table class=" table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nim Mahasiswa</th>
                        <th scope="col">Nama Mahasiswa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require "connect.php";
                    $num = 1;
                    $sql = "SELECT * FROM mahasiswa";
                    $data = mysqli_query($koneksi, $sql);
                    $arrayData = mysqli_fetch_all($data);
                    for ($i = 0; $i < sizeof($arrayData); $i++) {
                        echo "<tr>";
                        echo "<th scope='row'>$num</th>";
                        $num++;
                        for ($j = 0; $j < sizeof($arrayData[$i]); $j++) {
                            echo "<td>" . $arrayData[$i][$j] . "</td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>

    <div class="container text-center mt-4">
        <div class="row">
            <div class="col ">
                <div class="card text-bg-success m-3">
                    <div class="card-body">
                        <div class="container ">
                            <form action="admin.php" method="post" name="input">
                                <div class="mb-1">
                                    <label for="NimMhs" class="form-label">NIM </label>
                                    <input type="number" name="nim_mahasiswa" class="form-control" id="NimMhs" aria-describedby="emailHelp" required />
                                </div>
                                <div class="mb-3">
                                    <label for="NamaMhs" class="form-label">NAMA</label>
                                    <input type="text" class="form-control" id="NamaMhs" name="nama_mahasiswa" required />
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <!-- logout modal -->
            <!-- Button trigger modal -->
            <div class="container">
                <button type="button" class="btn btn-outline-danger w-100 mx-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Logout
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Ingin Keluar Dari Admin ?</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a href="logout.php"><button type="button" class="btn btn-primary">LOGOUT</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end logout modal -->

            </div>





</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>