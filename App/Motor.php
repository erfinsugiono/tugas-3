<?php
namespace App;

// inheritance dari kendaraan
class motor extends kendaraan {
  public function pesan() {
    echo "ini motor {$this->merk} berwarna {$this->warna} sedang berjalan."; 
  }
}