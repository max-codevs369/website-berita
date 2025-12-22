<?php

if (isset($_POST['edit'])) {
    $idArtikelPublish = $_POST['idArtikelPublish'];
    $judulArtikelPublish = $_POST['judulArtikelPublish'];
    $kodePenulis = $_POST['kodePenulis'];
    $kategori = $_POST['kategori'];
    $tglTerbit = $_POST['tglTerbit'];
    $isiArtikelPublish = $_POST['isiArtikelPublish'];
    $status = $_POST['status'];
    $gambarLama = $_POST['gambarLama'];

    $gambar = $gambarLama;

    if (!empty($_FILES['gambarjurnal']['name'])) {
        $allowedTypes = ['image/jpeg','image/png','image/gif'];
        if (in_array($_FILES['gambarjurnal']['type'], $allowedTypes)) {
            $fileName = time().'_'.basename($_FILES['gambarjurnal']['name']);
            $targetPath = '../uploads/'.$fileName;
            if (move_uploaded_file($_FILES['gambarjurnal']['tmp_name'], $targetPath)) {
                if ($gambarLama && file_exists('../uploads/'.$gambarLama)) unlink('../uploads/'.$gambarLama);
                $gambar = $fileName;
            }
        }
    }

    $ubah = $koneksi->query("UPDATE artikelpublish SET 
        judulArtikelPublish='$judulArtikelPublish',
        kodePenulis='$kodePenulis',
        kategori='$kategori',
        tglTerbit='$tglTerbit',
        isiArtikelPublish='$isiArtikelPublish',
        status='$status',
        gambarjurnal='$gambar'
        WHERE idArtikelPublish='$idArtikelPublish'");

    if ($ubah) {
        echo "<script>alert('Data berhasil diubah'); window.location='?page=admin/artikelPublish';</script>";
    } else {
        echo "<script>alert('Gagal mengubah data: ".addslashes($koneksi->error)."');</script>";
    }
}


?>