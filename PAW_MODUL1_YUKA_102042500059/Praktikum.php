<?php
$produk = [
    [
        "nama" => "Laptop ASUS VivaBook",
        "kategori" => "Laptop",
        "harga" => 7500000,
        "stok" => 5,
        "gambar" => "https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=600"
    ],
    [
        "nama" => "iPhone 15",
        "kategori" => "Smartphone",
        "harga" => 12000000,
        "stok" => 3,
        "gambar" => "https://images.unsplash.com/photo-1592899677977-9c10ca588bbd?w=600"
    ],
     [
        "nama" => "MousePad",
        "kategori" => "Aksesoris",
        "harga" => 50000,
        "stok" => 0,
        "gambar" => "https://images.unsplash.com/photo-1656071830624-06aa347f99a7?fm=jpg&q=60&w=600"
    ],
    [
        "nama" => "Keyboard",
        "kategori" => "Aksesoris",
        "harga" => 350000,
        "stok" => 8,
        "gambar" => "https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=600"
    ],
    [
        "nama" => "Mouse",
        "kategori" => "Aksesoris",
        "harga" => 350000,
        "stok" => 0,
        "gambar" => "https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?w=600"
    ],  
    [
        "nama" => "Laptop Acer Aspire",
        "kategori" => "Laptop",
        "harga" => 5500000,
        "stok" => 4,
        "gambar" => "https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=600"
    ]
];
$jumlahProduk = count($produk);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cia Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="navbar">
        <div class="logo">Cia Store</div>
        <nav>
            <a href="#">Home</a>
            <a href="#produk">Produk</a>
            <a href="#tentang">Tentang</a>
        </nav>
    </header>
    <section class="hero">
        <div>
            <p>SELAMAT DATANG GUYS DI</p>
            <h1>Cia Store</h1>
            <p>
                HAYOK temukan berbagai perangkat dan aksesoris
                teknologi terbaik dengan harga murah meriah muntah.
            </p>
            <a href="#produk" class="button">Nih lihat Produk</a>
        </div>
    </section>
    <section class="info">
        <div class="info-box">
            <h2><?php echo $jumlahProduk; ?></h2>
            <p>Jumlah Seluruh Produk</p>
        </div>
    </section>
    <section class="catalog" id="produk">
        <div class="title">
            <h2>Katalog Produk</h2>
            <p>
                Mungkin produk teknologi yang kamu butuhkan.
            </p>
        </div>
        <div class="product-container">
            <?php foreach ($produk as $item) { ?>
                <div class="product-card">
                    <img
                        src="<?php echo $item["gambar"]; ?>"
                        alt="<?php echo $item["nama"]; ?>"
                        class="product-image"
                    >
                    <div class="product-content">
                        <p class="category">
                            <?php echo $item["kategori"]; ?>
                        </p>
                        <h3>
                            <?php echo $item["nama"]; ?>
                        </h3>
                        <p class="price">
                            Rp <?php echo number_format($item["harga"], 0, ',', '.'); ?>
                        </p>
                        <?php if ($item["stok"] > 0) { ?>
                            <p class="stock">
                                Stok: <?php echo $item["stok"]; ?>
                            </p>
                            <span class="tersedia">
                                Ada dah
                            </span>
                            <button class="buy-button">
                                Beli plis
                            </button>
                            <?php } else { ?>
                            <p class="stock">
                                Stok: 0
                            </p>
                            <span class="habis">
                                Stok Habis
                            </span>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
        </div>
    </section>
    <section class="about" id="tentang">
        <h2>Tentang Cia Store</h2>
        <p>
            Cia Store merupakan toko ala kadarnya yang menyediakan
            berbagai perangkat dan aksesoris teknologia dengan
            harga yang murce.
            Toko ini dibuat karena pembuatnya harus ngerjain praktikum xixixxi
        </p>
        </section>
    <footer>
        <p>&copy; Mantap Cia Store</p>
    </footer>
</body>
</html>
