<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>JOURNAL SCHOOL | Register Siswa</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- iCheck Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css">
  <!-- AdminLTE -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="index.php"><b>JOURNAL</b>SCHOOL</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Halaman Pendaftaran Siswa Baru</p>

      <form action="prosesRegister.php" method="post">
        <div class="form-group mb-3">
            <select  name="nisn" class="form-control" required>
              <option value="" class="form-control">Pilih NISN</option>
              <?php
                include "koneksi.php";
                $sql=mysqli_query($koneksi, "SELECT * FROM siswa");
                while ($data=mysqli_fetch_array($sql)){
              ?>
              <option class="form-control" value="<?php echo $data['nisn']; ?>"><?php echo $data['nisn']; ?></option>
            <?php } ?>
            </select>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="nama" placeholder="Nama" required>
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="pass" minlength="3" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <!-- <div class="input-group mb-3">
          <input type="text" class="form-control" name="level" placeholder="level" required>
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div> -->
        <div class="form-group mb-3">
            <select name="level" class="form-control" required>
              <option value="" class="form-control">Pilih Level</option>
              <option class="form-control" value="penulis">Penulis</option>
              <option class="form-control" value="siswa">Siswa</option>
            </select>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <a href="login.php" class="text-center">Saya Sudah Memiliki Akun</a>
          <!-- /.col -->
        </div>
      </form>
      
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>
