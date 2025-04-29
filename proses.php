<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pesanan</title>
    <style>
        .btn-kembali {
            display: inline-block;
            background-color:rgb(20, 23, 26);
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        .btn-kembali:hover {
            background-color:rgb(7, 10, 12);
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <?php
        require_once 'MenuMakanan.php';
        require_once 'Pesanan.php';

        $daftarMenu = [
            "nasi_goreng" => new MenuMakanan("Nasi Goreng", "Makanan", 15000),
            "mie_ayam" => new MenuMakanan("Mie Ayam", "Makanan", 12000),
            "es_teh" => new MenuMakanan("Es Teh", "Minuman", 5000),
            "kopi_hitam" => new MenuMakanan("Kopi Hitam", "Minuman", 7000),
        ];

        $pesanan = new Pesanan();

        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['menu'])) {
            foreach ($_POST['menu'] as $dataPesanan) {
                if (isset($daftarMenu[$dataPesanan])) {
                    $pesanan->tambahMakanan($daftarMenu[$dataPesanan]);
                }
            }
        }

        $pesanan->tampilkanPesanan();
    ?>
    <a class="btn-kembali" href="form.php">Kembali ke Pemesanan</a>
</body>
</html>

