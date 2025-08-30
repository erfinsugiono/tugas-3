<?php
require __DIR__ . '/vendor/autoload.php';

use App\mobil;
use App\motor;
use App\interface_mesin;


// list set mobil
$bmw = new mobil("BMW", "putih");
$tesla = new mobil("Tesla", "hitam");

// list set motor
$vixion = new motor("Vixion", "silver");
$scoopy = new motor("Scoopy", "merah");

//nav
$bmw->navigasi("mojokerto");
$tesla->navigasi("mojokerto");
$scoopy->navigasi("pasuruan");
$vixion->navigasi("surabaya");

echo "Ini adalah daftar mobil: <br>";
$bmw->pesan();
echo "<br> (hasil interface akan terlihat seperti ini) ";
$bmw->nyalakan("menyala");
echo "<br>";

$tesla->pesan();
echo "<br> (hasil interface akan terlihat seperti ini) ";
echo "<br>";
echo "<br>";

echo "Ini adalah daftar motor: <br>";

$vixion->pesan();
echo "<br> (hasil interface akan terlihat seperti ini) ";
$vixion->nyalakan("value disini tidak akan tampil walaupun ada statement karena (== menyala)");
echo "<br>";

$scoopy->pesan();
echo "<br> (hasil interface akan terlihat seperti ini) ";
