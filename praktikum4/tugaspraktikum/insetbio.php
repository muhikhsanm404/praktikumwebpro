<!-- //Nama : Muhammad Ikhsan Mandirri
//NIm : 21104410070
//Kelas : TI P2K 2021
//Mata Kuliah : Praktikum Pemrograman Web -->

<?php
require "connect.php";

if (isset($_POST["input"])) {
  $nimMahasiswa = $_POST["nimMahasiswa"];
  $namaMahasiswa = $_POST["namaMahasiswa"];
  $kelaminMhs = $_POST["kelaminMhs"];
  $umurMhs = $_POST["umurMhs"];

  $sql = "INSERT INTO `mahasiswa` (`nimMahasiswa`, `namaMahasiswa`, `kelaminMhs`, `umurMhs`) VALUES ('$nimMahasiswa','$namaMahasiswa','$kelaminMhs','$umurMhs')";
  $addData = mysqli_query($connect, $sql);

  if ($addData) {
    $pesan = "Data mahasiswa berhasil disimpan.";
    header("Location: syntak.php");
    exit();
  } else {
    echo "Error: " . mysqli_error($connect);
  }
}
?>
