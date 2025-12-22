<?php
  session_start();
    if (!isset($_SESSION['nama']))
    {
      die("Anda Belum Login");
    }
    if ($_SESSION['level']!="admin")
    {
      die("Anda Bukan Admin");
    }

?>
<!DOCTYPE html>
<html>
<?php include __DIR__ ."/component/header.php"?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php include __DIR__ ."/component/navbar.php"; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include __DIR__ ."/component/sidebar.php"?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content pt-3">
      <div class="container-fluid">
            <?php 
        if (!empty($_GET['page'])){
          include $_GET['page'] . ".php";
        }else{ ?>
          <div class="card shadow-sm">
              <div class="card-body text-center">
                <h1 class="mb-3">Selamat Datang di Halaman Admin</h1>
                <p class="lead">Anda login sebagai <strong><?= htmlspecialchars($_SESSION['nama']); ?></strong></p>
              </div>
          </div>
        <?php } ?>
      </div><!-- /.container-fluid -->
      <!-- <center><img src="/../assets/img/school.jpg"></center> -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include __DIR__ ."/component/footer.php"?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
  <?php include __DIR__ ."/component/script.php" ?>
</body>
</html>

