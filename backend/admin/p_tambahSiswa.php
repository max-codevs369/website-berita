<?php 
include '../koneksi.php';

$nisn = $_POST['nisn'];
$namaSiswa = $_POST['namaSiswa'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$jk = $_POST['jk'];

$cek = $koneksi->query("SELECT * FROM siswa WHERE nisn='$nisn'");
if($cek->num_rows > 0){
    echo "<script>
        alert('NISN telah terdaftar!');
        window.history.back();
    </script>";
    exit;
}

$koneksi->query("INSERT INTO `siswa`(nisn, namaSiswa, kelas, jurusan, jk) VALUES('$nisn','$namaSiswa','$kelas','$jurusan','$jk')");

echo "<script>
    alert('Data Siswa Telah Ditambah');
    window.location.href='?page=admin/siswa';
</script>";
?>
