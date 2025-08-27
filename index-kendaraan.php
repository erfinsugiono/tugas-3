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

// interface
$interface_mesin = new interface_mesin();

echo "Ini adalah daftar mobil: <br>";

$bmw->pesan();
echo '<br> <br> (hasil interface akan terlihat seperti ini) ';
$interface_mesin->nyalakan();
echo "<br>";
$bmw->navigasi();
echo "<br>";

$tesla->pesan();
echo '<br> <br> (hasil interface akan terlihat seperti ini) ';
$interface_mesin->nyalakan();
echo "<br><br>";

echo "ini adalah daftar motor: <br>";
$vixion->pesan();
echo '<br> <br> (hasil interface akan terlihat seperti ini) ';
$interface_mesin->nyalakan();
echo "<br>";

$scoopy->pesan();
echo '<br> <br> (hasil interface akan terlihat seperti ini) ';
$interface_mesin->nyalakan();
