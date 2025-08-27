<?php
namespace Produk;

//inheritance dari produk
// nyontek chatgpt ga nemu contoh kombinasi rupiah/Rp. ditengah.

class Buku extends produk implements Diskon{	
	use rupiah; // trait merubah angka dgn format currency
	public function info() {
    	echo "{$this->nama_produk} " . $this->rupiah($this->harga);
	}

	public $persen;
	public function hitungDiskon ($persen) {
			$this->persen = $persen;
    return $this->harga - ($this->harga * ($this->persen/100));
}
}


