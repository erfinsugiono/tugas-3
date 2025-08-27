<?php 
namespace App;

// inheritance dari kendaraan
class mobil extends kendaraan {
  use gps;
  public function pesan() {
    echo "Ini mobil {$this->merk} berwarna {$this->warna} sedang berjalan menuju "; 
  }

}