<?php
namespace App;

// inheritance dari kendaraan
class motor extends kendaraan implements mesin  {
  use gps;
  public $tujuan;
  public function pesan() {
    echo "Ini motor {$this->merk} berwarna {$this->warna} sedang berjalan ke {$this->tujuan}";
  }
  public $nyalakan;
  public function nyalakan($nyalakan) {
    if ($nyalakan == "menyala"){
      echo "<br>mesin menyala";
    }
    elseif ($nyalakan = null){
      echo "<br>mesin mati";
    }
  }
}