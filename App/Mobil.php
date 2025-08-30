<?php 
namespace App;

// inheritance dari kendaraan
class mobil extends kendaraan implements mesin  {
  use gps;
  public $tujuan;  //navigasi ku ga isok muncul karena ga onk var iki padahal tak pikir cukup use wes kenek.
  public function pesan() {
    echo "Ini mobil {$this->merk} berwarna {$this->warna} sedang berjalan ke {$this->tujuan}"; 
  }
  public $nyalakan;
  public function nyalakan($nyalakan) {
    if ($nyalakan = "menyala"){
      echo "<br>mesin menyala";
    } 
    elseif ($nyalakan = "") {
      echo "<br>mesin mati";
    }
    
  }
}


// // setelah liat di beberapa YT tp "mojokerto ga gelem muncul"
// class mobil extends kendaraan  {
  
//   use gps;
//   public function pesan() {
//     echo "Ini mobil {$this->merk} berwarna {$this->warna} sedang berjalan ke {$this->tujuan}"; 
//   }
// }

// trait Gps {
//     public function navigasi($tujuan = null) {
//         if ($tujuan !== null) {
//             $this->tujuan = $tujuan; // set tujuan if provided
//         }
        
//         return $this->tujuan ?? "Belum ada tujuan";
//     }
// }


// plus iki aku gawe interface dimana input menyala untuk echo sedang menyala trus tidak menyala jika value ne 0 dengan beberapa contoh seng tak jupuk tekok chatgpt