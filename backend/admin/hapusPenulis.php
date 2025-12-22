<?php
include("../koneksi.php");
$kodePenulis = $_GET['kodePenulis'];
$sql = $koneksi->query("DELETE FROM penulis WHERE kodePenulis='$kodePenulis'");
if ($sql == TRUE) {
    echo "<a href=?page=admin/penulis1>Data Penulis</a>";
} else {
    echo "<a href=?page=admin/penulis1>Data Penulis</a>";
}
echo"<script>
alert('Data Penulis Telah Terhapus')
window.location.href='?page=admin/penulis1'
</script>";
?>