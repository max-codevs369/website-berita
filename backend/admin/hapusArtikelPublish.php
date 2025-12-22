<?php
include("../koneksi.php");

$idArtikelPublish = $_GET['idArtikelPublish'];

$koneksi->query("DELETE FROM komentar WHERE idArtikelPublish='$idArtikelPublish'");

$hapusArtikel = $koneksi->query("DELETE FROM artikelpublish WHERE idArtikelPublish='$idArtikelPublish'");

if($hapusArtikel){
    echo "<script>
        alert('Artikel dan semua data terkait berhasil dihapus');
        window.location.href='?page=admin/artikelPublish';
    </script>";
} else {
    echo "<script>
        alert('Gagal menghapus artikel');
        window.location.href='?page=admin/artikelPublish';
    </script>";
}
?>
