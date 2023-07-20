<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

</head>

<body>
    <div class="flex items-center bg-blue-800">
        <img src="./img/unisba.png" height="200" width="200" style="display:block; margin:auto;">
        <strong class="font-mono text-2xl font-bold ml-5 text-white">DATA MAHASISWA | PRAKTIKUM 1</strong>
    </div>
    <div class='ml-10 mt-10 text-2xl text-center'>
        <h1> <b> DATA MAHASISWA UNISBA</b></h1>
    </div>
    <?php

    if (isset($_GET['deleteID'])) {
        $pesan = deleteDatabase($_GET['deleteID']);
    } elseif (isset($_GET['updateID']) && isset($_POST['namaMahasiswa'])) {
        $pesan = updateDatabase($_GET['updateID'], $_POST['namaMahasiswa']);
    }

    function deleteDatabase($id)
    {
        require 'connect.php';
        $sql = "DELETE FROM mahasiswa WHERE nimMahasiswa='$id'";

        if (mysqli_query($connect, $sql)) {
            return "<h1>Data berhasil dihapus</h1>";
        } else {
            return "<h1>Data gagal dihapus</h1>";
        }
    }

    function updateDatabase($id, $nama)
    {
        require "connect.php";
        $sql = "UPDATE mahasiswa SET namaMahasiswa = '$nama' WHERE nimMahasiswa = '$id'";

        if (mysqli_query($connect, $sql)) {
            return "<h1>Success Update Data Nama Mahasiswa</h1>";
        } else {
            return "<h1>Failed to Update Data</h1>";
        }
    }

    ?>
    <nav class="navbar bg-secondary-subtle">
        <div class="container-fluid">
            <a class="navbar-brand">TUGAS PRAKTIKUM WEB PRO</a>
        </div>
    </nav>
    <div class="container text-center mt-5">
        <?= $pesan ? $pesan : '' ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nim Mahasiswa</th>
                    <th scope="col">Nama Mahasiswa</th>
                    <th scope="col">Kelamin Mahasiswa</th>
                    <th scope="col">Umur Mahasiswa</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Update</th>
                </tr>
            </thead>
            <tbody>
                <?php

                require "connect.php";
                $num = 1;
                $sql = "SELECT * FROM mahasiswa WHERE kelaminMhs = 'Laki-Laki' AND umurMhs > 20";
                $data = mysqli_query($connect, $sql);
                while ($row = mysqli_fetch_assoc($data)) {
                    echo "<tr>";
                    echo "<th scope='row'>$num</th>";
                    echo "<td>" . $row['nimMahasiswa'] . "</td>";
                    echo "<td>" . $row['namaMahasiswa'] . "</td>";
                    echo "<td>" . $row['kelaminMhs'] . "</td>";
                    echo "<td>" . $row['umurMhs'] . "</td>";
                    echo "<td><a href='syntak.php?deleteID=" . $row['nimMahasiswa'] . "' class='btn btn-danger'>Delete</a></td>";
                    echo "<td><button type='button' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#updateModal" . $row['nimMahasiswa'] . "'>Update</button></td>";
                    echo "</tr>";

                    $num++;
                }
                ?>
            </tbody>
        </table>

    </div>

    <?php
    // Modals for Update
    $data = mysqli_query($connect, $sql); // Execute the query again to reset the data pointer
    while ($row = mysqli_fetch_assoc($data)) {
    ?>
        <div class='modal fade' id='updateModal<?= $row['nimMahasiswa'] ?>' tabindex='-1' aria-labelledby='updateModalLabel<?= $row['nimMahasiswa'] ?>' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='updateModalLabel<?= $row['nimMahasiswa'] ?>'>Update Nama Mahasiswa</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body'>
                        <form action='syntak.php?updateID=<?= $row['nimMahasiswa'] ?>' method='post'>
                            <div class='form-group'>
                                <label for='namaMahasiswa'>Nama Mahasiswa</label>
                                <input type='text' class='form-control' id='namaMahasiswa' name='namaMahasiswa' value='<?= $row['namaMahasiswa'] ?>'>
                            </div>
                            <button type='submit' class='btn btn-primary'>Update</button>
                        </form>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <footer class="rounded absolute inset-x-0 text-center  bottom-0 ">

        </div>

        <span style="text-align:center"> © 2023
            <a href="" class="hover:bold"><b>Muh Ikhsan M - 21104410070 - TI P2K 2021

</body>

</html>