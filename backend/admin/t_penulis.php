<?php 
include '../koneksi.php';

if(isset($_POST['submit'])){
    $nisn = $_POST['nisn'];
    $namaPenulis = $_POST['namaPenulis'];

    $kodePenulis = ''; 
    $koneksi->query("INSERT INTO penulis (kodePenulis, nisn, namaPenulis) VALUES('$kodePenulis','$nisn','$namaPenulis')");

    echo "<script>
        alert('Data Penulis Telah Ditambah');
        window.location.href='?page=admin/penulis1';
    </script>";
}
?>

<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card card-primary">
            <div class="card-header text-center">
                <h3 class="card-title">Form Tambah Data Penulis</h3>
            </div>
            <form method="POST" action="">
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label for="nisn">Pilih NISN</label>
                        <select name="nisn" id="nisn" class="form-control" required>
                            <option value="">-- Pilih NISN --</option>
                            <?php
                            include "../koneksi.php";
                            $sql = mysqli_query($koneksi, "SELECT * FROM siswa");
                            while ($siswa = mysqli_fetch_array($sql)) {
                                $cek = mysqli_query($koneksi, "SELECT * FROM penulis WHERE nisn='{$siswa['nisn']}'");
                                if (mysqli_num_rows($cek) == 0) {
                                    echo "<option value='{$siswa['nisn']}'>{$siswa['nisn']} - {$siswa['namaSiswa']}</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="namaPenulis">Nama Penulis</label>
                        <input type="text" name="namaPenulis" id="namaPenulis" class="form-control" placeholder="Masukkan Nama Penulis" required>
                    </div>
                </div>

                <div class="card-footer text-center">
                    <button type="submit" name="submit" class="btn btn-primary">Tambahkan</button>
                </div>
            </form>
        </div>
    </div>
</div>
