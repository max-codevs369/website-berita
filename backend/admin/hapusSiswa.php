<?php
include("../koneksi.php");
$nisn = $_GET['nisn'];
$sql = $koneksi->query("DELETE FROM siswa WHERE nisn='$nisn'");
if ($sql == TRUE) {
    echo "<a href=?page=admin/siswa>Data Siswa</a>";
} else {
    echo "<a href=?page=admin/siswa>Data Siswa</a>";
}
echo"<script>
alert('Data Siswa Telah Terhapus')
window.location.href='?page=admin/siswa'
</script>";
?>