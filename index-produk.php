<?php 

require __DIR__ . '/vendor/autoload.php';

use Produk\Buku;
use Produk\Elektronik;
use Produk\hitungDiskon;


// list book
$the_fall_of_gondolin = new Buku("The Fall of Gondolin", 79000);
$the_lord_of_the_rings = new Buku("The Lord of The Rings", 88000);
$frederik_sigmurd_psikolog = new Buku("Frederik Sigmurd Psikolog", 75000);

//list electronik
$kalkulator = new Elektronik("Kalkulator", 15000);
$stop_kontak = new Elektronik("Stop Kontak", 10000);
$kabel_lan_1m = new Elektronik("Kabel Lan 1 meter", 3000);


// sejauh ini chatgpt kontribusi besar ng interface & trait.
// contoh e ng 
// $diskon = $the_fall_of_gondolin->hitungDiskon(20); 
// awal e aku gawe echo "harga diskon (20%): " . $this->harga - ($this->harga * ($this->persen/100)
// tekok kene aku bingung sebener e yok opo cara ne properties persen isok di isi otomatis kyk hitungDiskon(20). jadi tak pekso tak isi ng buku properties e (gawe rumus ku dewe tpi takok ng chatgpt) untuk sementara history e tak masuk no ng txt.


$the_fall_of_gondolin->info();
$diskon = $the_fall_of_gondolin->hitungDiskon(33); // 20% diskon
echo "<br>harga diskon (33%): " . $the_fall_of_gondolin->rupiah($diskon);
echo "<br>";

$the_lord_of_the_rings->info();
$diskon = $the_lord_of_the_rings->hitungDiskon(17); // 20% diskon
echo "<br>harga diskon (17%): " . $the_lord_of_the_rings->rupiah($diskon);
echo "<br>";

$frederik_sigmurd_psikolog->info();
$diskon = $frederik_sigmurd_psikolog->hitungDiskon(11); // 20% diskon
echo "<br>harga diskon (11%): " . $frederik_sigmurd_psikolog->rupiah($diskon);
echo "<br><br>";

$kalkulator->info();
$diskon = $kalkulator->hitungDiskon(20); // 20% diskon
echo "<br>harga diskon (20%): " . $kalkulator->rupiah($diskon);
echo "<br>";

$stop_kontak->info();
$diskon = $stop_kontak->hitungDiskon(10); // 20% diskon
echo "<br>harga diskon (10%): " . $stop_kontak->rupiah($diskon);
echo "<br>";

$kabel_lan_1m->info();
$diskon = $kabel_lan_1m->hitungDiskon(5); // 20% diskon
echo "<br>harga diskon (5%): " . $kabel_lan_1m->rupiah($diskon);
echo "<br>";