<?php

include "../koneksi.php";

$judulArtikelPublish=$_POST['judulArtikelPublish'];
$kodePenulis=$_POST['kodePenulis'];
$kategori=$_POST['kategori'];
$tglTerbit=$_POST['tglTerbit'];
$isiArtikelPublish=$_POST['isiArtikelPublish'];
$idArtikel=$_POST['idArtikel'];
$status=$_POST['status'];

$koneksi->query("INSERT INTO `artikelpublish` (`judulArtikelPublish`,`kodePenulis`,`kategori`,`tglTerbit`,`isiArtikelPublish`,`idArtikel`,`status`) VALUES('$judulArtikelPublish','$kodePenulis','$kategori','$tglTerbit','$isiArtikelPublish','$idArtikel','$status')");


echo"<script>
alert('Data Artikel Publish Telah Ditambah')
window.location.href='?page=admin/artikelPublish'
</script>";
?>
