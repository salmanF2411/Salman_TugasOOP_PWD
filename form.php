<!DOCTYPE html>
<html>
<head>
    <title>Pemesanan Makanan Kantin</title>
    <style>
    .btn {
        background-color:rgb(20, 23, 26);
        color: white;
        padding: 5px 10px;
        text-decoration: none;
        border-radius: 8px;
        font-weight: bold;
        transition: background-color 0.3s ease, transform 0.2s;
        cursor: pointer;
    }

    .btn:hover {
        background-color:rgb(7, 10, 12);
        transform: scale(1.05);
    }
</style>
</head>
<body>
    <?php
        require_once 'MenuMakanan.php';

        $daftarMenu = [
            "nasi_goreng" => new MenuMakanan("Nasi Goreng", "Makanan", 15000),
            "mie_ayam" => new MenuMakanan("Mie Ayam", "Makanan", 12000),
            "es_teh" => new MenuMakanan("Es Teh", "Minuman", 5000),
            "kopi_hitam" => new MenuMakanan("Kopi Hitam", "Minuman", 7000),
        ];
    ?>
    <h2>Pemesanan Makanan Kantin</h2>
    <form method="post" action="proses.php">
        <p><strong>Pilih Menu:</strong></p>
        <?php foreach ($daftarMenu as $menu => $makanan): ?>
            <label>
                <input type="checkbox" name="menu[]" value="<?= $menu ?>">
                <?= $makanan->getInfo() ?>
            </label><br>
        <?php endforeach; ?>
        <br>
        <button class="btn" type="submit">Pesan Sekarang</button>
    </form>
</body>
</html>
