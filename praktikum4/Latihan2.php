<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .identitas {
            background-color: #ffffff;
            padding: 10px;
            width: 100%;
            height: 100px;
            font-family: "Lucida Handwriting", "cursive", "Segoe Script";
            border-radius: 10px;
            align-items: center;
            display: flex;
            justify-content: center;
            margin-left: 0%;
            margin-right: 0%;
            margin-top: 3%;
            font-size: 30px;
            color: lime;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);

        }



        body {
            background-color: #5ce65e;
        }
    </style>

<body>
    <div class="identitas">
        <img src="./img/unisba.png" width="150" height="150">
        MUH IKHSAN MANDIRRI |
        21104410070
        | TI P2K 2021

    </div>
    <form action="" method="post">
        <p>
            id:
            <input type="text" name="id" id="id">
        </p>
        <p>
            Name:
            <input type="text" name="name" id="name">
        </p>
        <p>
            Age:
            <input type="text" name="age" id="age">
        </p>
        <input type="submit" value="Submit">
    </form>
</body>


<?php

require "connect.php";

$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];

$sql = "INSERT INTO biodata (id,nama,age) VALUES('$id','$name','$age')";
if (mysqli_query($connect, $sql)) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Data gagal ditambahkan";
}


?>

</body>
</html>