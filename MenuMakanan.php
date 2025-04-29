<?php
class MenuMakanan {
    public $nama;
    public $kategori;
    public $harga;

    public function __construct($nama, $kategori, $harga) {
        $this->nama = $nama;
        $this->kategori = $kategori;
        $this->harga = $harga;
    }

    public function getInfo() {
        return "{$this->nama} - Rp " . number_format($this->harga, 0, ',', '.');
    }
}
?>
