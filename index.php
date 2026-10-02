<?php
$produk = [
    [
        "nama" => "HP Samsung S26 FE",
        "kategori" => "HANDPHONE",
        "harga" => 14000000,
        "stok" => 4
    ],
    [
        "nama" => "Laptop THINKPAD T490s",
        "kategori" => "LAPTOP",
        "harga" => 6000000,
        "stok" => 3
    ],
    [
        "nama" => "Mouse Gaming",
        "kategori" => "MOUSE",
        "harga" => 300000,
        "stok" => 10
    ],
    [
        "nama" => "Keyboard Thinkpad",
        "kategori" => "KEYBOARD",
        "harga" => 850000,
        "stok" => 5
    ],
    [
        "nama" => "Speaker JBL 5.0",
        "kategori" => "SPEAKER",
        "harga" => 450000,
        "stok" => 0
    ],
    [
        "nama" => "Mousepad Custom",
        "kategori" => "ACCESSORIES",
        "harga" => 150000,
        "stok" => 0
    ]
];

$total_produk = count($produk);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cia Store</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<main>
    <section class="hero">
        <nav class="hero-nav">
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#produk">Products</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </nav>

        <h3>CIA STORE</h3>
        <h1>Simple Tech Store.</h1>
        <p>Temukan berbagai perangkat dan aksesoris teknologi untuk kebutuhanmu :)</p>
        <br>
        <button>Lihat Produk</button>
    </section>

    <section id="produk" class="katalog-container">
        <div class="katalog-header">
            <div>
                <h2>OUR KATALOG PRODUCTS</h2>
            </div>
            <div class="Total-produk">
                Total Produk: <?php echo $total_produk; ?> 
            </div>
        </div>

        <div class="Produk-grid">
            <?php foreach ($produk as $item) : ?>
                <article class="Produk-card">
                    <div>
                        <div class="Kategori-label">
                            <?php echo $item["kategori"]; ?>
                        </div>
                        <h3 class="nama-produk"><?php echo $item['nama']; ?></h3>
                        <div class="harga">
                            Rp<?php echo number_format($item['harga'], 0, ',', '.'); ?>
                        </div>
                        <div style="font-size: 14px; color: #555;">
                            Stok: <?php echo $item['stok']; ?>
                        </div>
                    </div>

                    <div class="card-footer">
                        <?php if ($item['stok'] > 0): ?>
                            <span class="status-tersedia">Tersedia</span>
                            <button class="button-beli">Beli Sekarang</button>
                        <?php else: ?>
                            <span class="status-habis">Stok Habis</span>
                            <button class="button-beli" disabled>Habis</button>
                        <?php endif; ?>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </section>
</main>

<footer>
    <p>&copy; 2026 ALMIRA MAULIDA AZMI - 102042500142.</p>
</footer>

</body>
</html>