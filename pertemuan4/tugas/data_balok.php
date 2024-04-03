<?php
// Memanggil class Balok
require_once "class_balok.php";

// Membuat 4 objek dengan dimensi berbeda
$balok1 = new Balok(29, 16, 7);
$balok2 = new Balok(14, 9, 5);
$balok3 = new Balok(19, 12, 8);
$balok4 = new Balok(23, 15, 10);

// Menampilkan informasi Luas, Keliling, dan Volume untuk setiap objek
$balok1 = new Balok(29, 16, 7);
echo "Balok 1: <br>";
echo "Luas: " . $balok1->getLuas() . "<br>";
echo "Keliling: " . $balok1->getKeliling() . "<br>";
echo "Volume: " . $balok1->getVolume() . "<br><br>";

$balok2 = new Balok(14, 9, 5);
echo "Balok 2: <br>";
echo "Luas: " . $balok2->getLuas() . "<br>";
echo "Keliling: " . $balok2->getKeliling() . "<br>";
echo "Volume: " . $balok2->getVolume() . "<br><br>";

$balok3 = new Balok(19, 12, 8);
echo "Balok 3: <br>";
echo "Luas: " . $balok3->getLuas() . "<br>";
echo "Keliling: " . $balok3->getKeliling() . "<br>";
echo "Volume: " . $balok3->getVolume() . "<br><br>";

$balok4 = new Balok(23, 15, 10);
echo "Balok 4: <br>";
echo "Luas: " . $balok4->getLuas() . "<br>";
echo "Keliling: " . $balok4->getKeliling() . "<br>";
echo "Volume: " . $balok4->getVolume() . "<br><br>";
?>