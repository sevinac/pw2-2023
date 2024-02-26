<?php
    $buah = array(
  array(
     "id" => "1",
      "nama" => "Jeruk",
      "warna" => "Oren",
      "stok" => 125,
      "harga" => 40000,
      "deskripsi" => "Buah jeruk memiliki rasa segar dan kaya akan vitamin C."
  ),
  array(
    "id" => "2",
      "nama" => "Strawberry",
      "warna" => "Merah",
      "stok" => 100,
      "harga" => 100000,
      "deskripsi" => "Buah strawberry mengandung antioksidan yang sangat tinggi."
  ),
  array(
    "id" => "3",
      "nama" => "Mangga",
      "warna" => "Hijau",
      "stok" => 80,
      "harga" => 85000,
      "deskripsi" => "Buah mangga memiliki rasa manis dan sering digunakan dalam salad buah."
  ),
  array(
    "id" => "5",
      "nama" => "Kelengkeng",
      "warna" => "Coklat",
      "stok" => 95,
      "harga" => 60000,
      "deskripsi" => "Buah Kelengkeng memiliki rasa yang manis namun ada juga yang agak asam."
  ),
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
    
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          foreach ($buah as $infoBuah) {
            echo "<tr>";
            echo "<td>" . $infoBuah['id'] . "</td>";
            echo "<td>" . $infoBuah['nama'] . "</td>";
            echo "<td>" . $infoBuah['warna'] . "</td>";
            echo "<td>" . $infoBuah['stok'] . "</td>";
            echo "<td>Rp/kg " . $infoBuah['harga'] . "</td>";
            echo "<td>" . $infoBuah['deskripsi'] . "</td>";
            echo "</tr>";
        };
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
