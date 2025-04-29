<?php
require_once 'MenuMakanan.php';

class Pesanan {
    private $daftarMakanan = [];

    public function tambahMakanan(MenuMakanan $makanan) {
        $this->daftarMakanan[] = $makanan;
    }

    public function hitungTotal() {
        $total = 0;
        foreach ($this->daftarMakanan as $makanan) {
            $total += $makanan->harga;
        }
        return $total;
    }

    public function tampilkanPesanan() {
        if (empty($this->daftarMakanan)) {
            echo "<p><strong>Tidak ada pesanan.</strong></p>";
            return;
        }

        echo "<h2>Detail Pesanan</h2><ul>";
        foreach ($this->daftarMakanan as $makanan) {
            echo "<li>{$makanan->nama} ({$makanan->kategori}) - Rp " . number_format($makanan->harga, 0, ',', '.') . "</li>";
        }
        echo "</ul>";
        echo "<p><strong>Total: Rp " . number_format($this->hitungTotal(), 0, ',', '.') . "</strong></p>";
    }
}
?>
