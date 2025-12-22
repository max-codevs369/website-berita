<?php
$artikelPages = ['admin/artikelPublish', 'admin/editArtikelPublish'];

$penulisPages = ['admin/penulis1', 'admin/t_penulis', 'admin/editPenulis'];

$pengajuanPages = ['admin/pengajuan', 'admin/detailPengajuan'];

$siswaPages = ['admin/siswa', 'admin/t_siswa', 'admin/editSiswa'];

$currentPage = $_GET['page'] ?? '';
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
        <img src="assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Journal School</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="assets/adminlte/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= htmlspecialchars($_SESSION['nama']); ?></a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="home.php" class="nav-link <?= $currentPage === '' ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="?page=admin/artikelPublish" class="nav-link <?= in_array($currentPage, $artikelPages) ? 'active' : ''; ?>">
                        <i class="nav-icon far fa-file-alt"></i>
                        <p>Artikel Publish</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="?page=admin/penulis1" class="nav-link <?= in_array($currentPage, $penulisPages) ? 'active' : ''; ?>">
                        <i class="nav-icon far fa-user"></i>
                        <p>Penulis</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="?page=admin/pengajuan" class="nav-link <?= in_array($currentPage, $pengajuanPages) ? 'active' : ''; ?>">
                        <i class="nav-icon far fa-file"></i>
                        <p>Pengajuan</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="?page=admin/siswa" class="nav-link <?= in_array($currentPage, $siswaPages) ? 'active' : ''; ?>">
                        <i class="nav-icon far fa-file"></i>
                        <p>Siswa</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../logout.php" class="nav-link" onclick="return confirm('Apakah anda yakin ingin logout?')">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
