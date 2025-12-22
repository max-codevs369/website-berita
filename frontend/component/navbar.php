<?php 
session_start();
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">Journal School</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?= ($page == 'home') ? 'active fw-bold text-primary' : ''; ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($page == 'berita') ? 'active fw-bold text-primary' : ''; ?>" href="index.php?page=berita">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($page == 'tentang') ? 'active fw-bold text-primary' : ''; ?>" href="index.php?page=tentang">Tentang</a>
                </li>

                <?php if(isset($_SESSION['level']) && $_SESSION['level'] == 'admin') :?>
                    <li class="nav-item">
                        <a class="nav-link" href="backend/home.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" onclick="return confirm('Apakah anda yakin ingin logout?')">Logout</a>
                    </li>
                <?php elseif(isset($_SESSION['level']) && $_SESSION['level'] == 'penulis') : ?>   
                    <li class="nav-item">
                        <a class="nav-link" href="backend/dashboardPenulis.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" onclick="return confirm('Apakah anda yakin ingin logout?')">Logout</a>
                    </li>
                <?php elseif(isset($_SESSION['level']) && $_SESSION['level'] == 'siswa'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" onclick="return confirm('Apakah anda yakin ingin logout?')">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link <?= ($page == 'login') ? 'active fw-bold text-primary' : ''; ?>" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($page == 'register') ? 'active fw-bold text-primary' : ''; ?>" href="register.php">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
