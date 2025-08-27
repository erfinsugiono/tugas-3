<?php
namespace Produk;

class Elektronik extends produk implements Diskon {
	use rupiah;
	public function info() {
    	echo "{$this->nama_produk} " . $this->rupiah($this->harga);
	}
	public $persen;
	public function hitungDiskon ($persen) {
			$this->persen = $persen;
    return $this->harga - ($this->harga * ($this->persen/100));
}
}