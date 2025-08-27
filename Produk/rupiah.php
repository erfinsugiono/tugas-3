<?php

namespace Produk;
// gawe chatgpt soal e ga nemu kombinasi Rp di tengah atau sebelah kiri.
trait Rupiah {
    public function rupiah($angka) {
        return "Rp " . number_format($angka, 0, ',', '.');
    }
}
