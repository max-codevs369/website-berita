<footer class="bg-dark text-light pt-5 pb-3 mt-5">
    <div class="container">
        <div class="row">
        
        <div class="col-md-4 mb-3">
            <h4 class="fw-bold text-uppercase">Journal School</h4>
            <p class="text-muted">
            Portal berita dan jurnal sekolah.<br>
            Menyajikan informasi terbaru, akurat, dan bermanfaat untuk siswa, guru, serta masyarakat.
            </p>
        </div>

        <div class="col-md-4 mb-3">
            <h5 class="fw-bold text-uppercase">Menu Cepat</h5>
            <ul class="list-unstyled">
            <li><a href="index.php" class="text-decoration-none text-light d-block py-1">Home</a></li>
            <li><a href="index.php?page=berita" class="text-decoration-none text-light d-block py-1">Berita</a></li>
            <li><a href="index.php?page=tentang" class="text-decoration-none text-light d-block py-1">Tentang</a></li>
            <?php if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin'): ?>
            <li><a href="backend/home.php" class="text-decoration-none text-light d-block py-1">Dashboard</a></li>
            <li><a href="logout.php" class="text-decoration-none text-light d-block py-1" onclick="return confirm('Apakah anda yakin ingin logout?')">Logout</a></li>
            <?php elseif(isset($_SESSION['level']) && $_SESSION['level'] == 'penulis'): ?>
            <li><a href="backend/dashboardPenulis.php" class="text-decoration-none text-light d-block py-1">Dashboard</a></li>
            <li><a href="logout.php" class="text-decoration-none text-light d-block py-1" onclick="return confirm('Apakah anda yakin ingin logout?')">Logout</a></li>
            <?php elseif(isset($_SESSION['level']) && $_SESSION['level'] == 'siswa'): ?>
            <li><a href="logout.php" class="text-decoration-none text-light d-block py-1" onclick="return confirm('Apakah anda yakin ingin logout?')">Logout</a></li>
            <?php else: ?>
            <li><a href="login.php" class="text-decoration-none text-light d-block py-1">Login</a></li>
            <li><a href="register.php" class="text-decoration-none text-light d-block py-1">Register</a></li>
            <?php endif; ?>
            </ul>
        </div>

        <?php include __DIR__ .'/../tanggal.php'; ?>

        <div class="col-md-4 mb-3">
            <h5 class="fw-bold text-uppercase">Tanggal Hari Ini</h5>
            <p class="mb-1"><i class="bi bi-calendar-event-fill me-2"></i> 
                <?= "$hari, $tanggal $bulan $tahun"; ?>
            </p>
        </div>
        </div>

        <hr class="border-light">

        <div class="text-center">
        <small>© <?= date("Y"); ?> Journal School. All rights reserved.</small>
        </div>
    </div>
</footer>

