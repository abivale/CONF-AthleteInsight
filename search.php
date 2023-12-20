<!DOCTYPE html>
<html>
<head>
    <title>Landing Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
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
                <form action="search.php" method="GET">
                    <input type="text" name="query" placeholder="Cari">
                    <button type="submit">Cari</button>
                </form>
            </div>
        </div>
    </header>
    <div class="container" style="background-image: url('pramuka.png');">
        <section id="content">
        <?php
            if (isset($_GET['query'])) {
                $search_query = $_GET['query'];

                // Di sini Anda dapat melakukan pencarian berdasarkan $search_query
                // Misalnya, mengambil data dari database dan menampilkan hasilnya
                // Contoh sederhana:
                echo "<p>Anda mencari: " . htmlspecialchars($search_query) . "</p>";

                // Simulasi hasil pencarian
                echo "<ul>";
                echo "<li>Hasil 1: Contoh hasil pencarian 1</li>";
                echo "<li>Hasil 2: Contoh hasil pencarian 2</li>";
                echo "<li>Hasil 3: Contoh hasil pencarian 3</li>";
                echo "</ul>";
            } else {
                echo "<p>Masukkan kata kunci untuk memulai pencarian.</p>";
            }
            ?>
        </section>
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
            <h1>Tentang</h1>
                <p>Tujuan Raimuna adalah membina dan mengembangkan persaudaraan dan persatuan di kalangan para Pramuka Penegak dan Pramuka Pandega serta memberikan kepada mereka kegiatan kreatif, rekreatif dan produktif yang bersifat edukatif.</p>
            </div>
            <div class="footer-section links">
                <h1>Tautan Berguna</h1>
                <ul>
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="registration.php">Pendaftaran</a></li>
                </ul>
            </div>
            <div class="footer-section contact">
                <h1>Kontak Kami</h1>
                <p><i class="fas fa-envelope"></i> Kelvinardiansah16@gmail.com</p>
                <p><i class="fas fa-phone"></i> +6282130525087</p>
                <p><i class="fas fa-map-marker-alt"></i> Jl. balekambang, Kec. Majalaya, Bandung</p>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; <?php echo date("Y"); ?> Raicabkabbdg. Hak Cipta Dilindungi.
        </div>
    </footer>
</body>
</html>
