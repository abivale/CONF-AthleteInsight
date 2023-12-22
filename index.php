<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        // Ganti path gambar splash sesuai dengan kebutuhan Anda
        $background_image_url = 'splash-image.png';
    ?>

    <header style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo $background_image_url; ?>');">
        <div class="navbar">
            <div class="menu-icon" id="menu-icon">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <ul class="nav-links" id="nav-links">
                <li><a href="index.php">Beranda</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="registrasi.php">Pendaftaran</a></li>
            </ul>
            <div class="search-bar">
                <form action="" method="GET">
                    <input type="text" name="query" placeholder="Cari">
                    <button type="submit">Cari</button>
                </form>
            </div>
        </div>
        <h1 class="site-title"></h1>
    </header>

    <div class="container">
        <!-- Konten Pendaftaran di sini -->
        <div class="registration-section">
            <!-- Isi konten pendaftaran -->
        </div>
    </div>

    <script>
        // Mengambil elemen-elemen yang diperlukan
        const menuIcon = document.getElementById('menu-icon');
        const navLinks = document.getElementById('nav-links');

        // Menambahkan event listener untuk mengatasi klik pada ikon menu
        menuIcon.addEventListener('click', () => {
            navLinks.classList.toggle('show'); // Menampilkan atau menyembunyikan menu
        });
    </script>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section about">
                <!-- Isi bagian about -->
            </div>
            <div class="footer-section contact">
                <!-- Isi bagian contact -->
            </div>
        </div>
        <div class="footer-bottom">
            &copy; <?php echo date("Y"); ?> CONF . Hak Cipta Dilindungi.
        </div>
    </footer>
</body>
</html>
