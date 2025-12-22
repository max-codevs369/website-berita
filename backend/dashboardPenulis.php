<?php
session_start();
if (!isset($_SESSION['nama'])) {
    die("Anda Belum Login");
}
if ($_SESSION['level'] != "penulis") {
    die("Anda Bukan Penulis");
}

function isActive($pageName) {
    if(!isset($_GET['page']) && $pageName === 'dashboardPenulis.php') return 'active';
    if(isset($_GET['page']) && $_GET['page'] === $pageName) return 'active';
    return '';
}

?>

<!DOCTYPE html>
<html>
<?php include __DIR__ . "/component/header.php" ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php include __DIR__ . "/component/navbar.php" ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="assets/adminlte/dist/img/AdminLTELogo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity:.8">
      <span class="brand-text font-weight-light">Journal School</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/adminlte/dist/img/avatar4.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= htmlspecialchars($_SESSION['nama']); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <li class="nav-item">
            <a href="dashboardPenulis.php" class="nav-link <?= isActive('dashboardPenulis.php')?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=Penulis/penulis" class="nav-link <?= (isset($_GET['page']) && $_GET['page']=='Penulis/penulis') ? 'active' : '' ?>">
              <i class="nav-icon far fa-user"></i>
              <p>Penulis</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=Penulis/artikelPengajuan" class="nav-link <?= (isset($_GET['page']) && $_GET['page']=='Penulis/artikelPengajuan') ? 'active' : '' ?>">
              <i class="nav-icon far fa-file"></i>
              <p>Artikel Pengajuan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../logout.php" class="nav-link" onclick="return confirm('Apakah anda yakin ingin Logout')">
              <i class="fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content pt-3">
      <div class="container-fluid">
        <?php 
          if (!empty($_GET['page'])){
            include $_GET['page'] . ".php";
          } else { ?>
            <div class="card shadow-sm">
              <div class="card-body text-center">
                <h1 class="mb-3">Selamat Datang di Halaman Penulis</h1>
                <p class="lead">Anda login sebagai <strong><?= htmlspecialchars($_SESSION['nama']); ?></strong></p>
                <!-- <img src="GambarJournal/pipo era Pendidikan Baru journal school.jpg" class="img-fluid rounded mt-3" alt="Banner"> -->
              </div>
            </div>
        <?php } ?>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

  <?php include __DIR__ . "/component/footer.php" ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark"></aside>
</div>
<!-- ./wrapper -->

<!-- JavaScript -->
  <?php include __DIR__ . "/component/script.php" ?>
</body>
</html>
