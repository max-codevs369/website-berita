<?php
include("../koneksi.php");
$nisn = $_GET['nisn'];
$data = $koneksi->query("SELECT * FROM `siswa` WHERE `nisn`='$nisn'")->fetch_assoc();
?>
<div class="row mb-5">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="">NISN</label>
                        <input id="nisn" type="text" name="nisn" class="form-control" value="<?php echo $data['nisn'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Siswa</label>
                        <input type="text" id="namaSiswa" name="namaSiswa" class="form-control" value="<?php echo $data['namaSiswa'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Kelas</label>
                        <input type="text" id="kelas" name="kelas" class="form-control" value="<?php echo $data['kelas'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jurusan</label>
                        <input type="text" id="jurusan" name="jurusan" class="form-control" value="<?php echo $data['jurusan'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <input type="text" id="jk" name="jk" class="form-control" value="<?php echo $data['jk'] ?>" required>
                    </div>
            </div>
                    <button class="btn btn-primary" name="edit" type="submit">Edit Data</button>
                </form>
                <?php if (isset($_POST['edit'])) {
                    $nisn = $_POST['nisn'];
                    $namaSiswa= $_POST['namaSiswa'];
                    $kelas= $_POST['kelas'];
                    $jurusan=$_POST['jurusan'];
                    $jk= $_POST['jk'];
                    $ubah = $koneksi->query("UPDATE `siswa` SET `nisn`='$nisn',`namaSiswa`='$namaSiswa',`kelas`='$kelas',`jurusan`='$jurusan',`jk`='$jk' WHERE nisn='$nisn'");
                    if ($ubah) {
                        echo "<script>
                                alert('Data berhasil diubah')
                                window.location='?page=admin/siswa'
                                </script>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
