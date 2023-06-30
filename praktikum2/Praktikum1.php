<!-- //Nama : Muhammad Ikhsan Mandirri
//NIm : 21104410070
//Kelas : TI P2K 2021
//Mata Kuliah : Praktikum Pemrograman Web -->

<!DOCTYPE html>
<html>

<head>
  <title>Tugas Praktikum - Kalkulator Matriks</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    table {
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    table td {
      padding: 5px;
      border: 1px solid black;

    }

    #result {
      font-weight: bold;
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <div class="flex items-center bg-blue-800">
    <img src="./img/unisba.png" class="h-20 mr-3" style="margin-left: 50px;">
    <strong class="font-mono text-2xl font-bold ml-5 text-white"> KALKULTOR MATRIKS | PRAKTIKUM 1</strong>
  </div>

  <div class='ml-10 mt-10 text-2xl text-center'>
    <h1> <b> Kalkulator Matriks </b></h1>

    <b>
      <h2>Matriks A</h2>
    </b>
    <form method="post" action="" id="form">
      <table id="matrixA" align="center">
        <?php
        for ($i = 0; $i < 3; $i++) {
          echo "<tr>";
          for ($j = 0; $j < 3; $j++) {
            echo "<td><input type='number' name='a[$i][$j]' /></td>";
          }
          echo "</tr>";
        }
        ?>
      </table>

      <b>
        <h2>Matriks B</h2>
      </b>
      <table id="matrixB" align="center">
        <?php
        for ($i = 0; $i < 3; $i++) {
          echo "<tr>";
          for ($j = 0; $j < 3; $j++) {
            echo "<td><input type='number' name='b[$i][$j]' /></td>";
          }
          echo "</tr>";
        }
        ?>
      </table>
      <button class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded" name="kalkulator">
        Hitung
      </button>

    </form>

    <?php
    if (isset($_POST['kalkulator'])) {
      $matrixA = $_POST['a'];
      $matrixB = $_POST['b'];
      $result = calculateMatrix($matrixA, $matrixB);

      echo "<b><h2>Hasil</h2></b>";
      echo "<table id='' align='center'>";
      for ($i = 0; $i < 3; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 3; $j++) {
          echo "<td>{$result[$i][$j]}</td>";
        }
        echo "</tr>";
      }
      echo "</table>";
    }

    function calculateMatrix($matrixA, $matrixB)
    {
      $result = array();
      for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
          $result[$i][$j] = $matrixA[$i][$j] + $matrixB[$i][$j];
        }
      }
      return $result;
    }
    ?>
  </div>

  <footer class="rounded bg-blue-800 absolute inset-x-0  bottom-0 ">
    <!-- <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
      <div class="sm:flex sm:items-center sm:justify-between">
        <a href="" class="flex items-center ml-96 mb-4 sm:mb-0">
          <img src="./img/unisba.png" class="h-20 mr-3" alt="Unisba Logo" />
          <span class="text-2xl font-semibold whitespace-nowrap dark:text-white">Praktikum Web Pemrograman</span>

        </a> 

    </div> -->
    <!-- <hr class="my-6 bold border-white-200 sm:mx-auto dark:border-white-700 lg:my-8" /> -->
    <span class="block text-2xl text-white sm:text-center"> © 2023
       <a href="" class="hover:underline"><b>Muh Ikhsan M - 21104410070 - TI P2K 2021

        </b></a></span>
    </div>
  </footer>
</body>
<script>
  let form = document.getElementById('#form');
  form.addEventListener('submit', (e) => {
    e.preventDefault()
  })
</script>

</html>