<?php
include("../koneksi.php");

$idArtikelPublish = $_GET['idArtikelPublish'] ?? null;
if (!$idArtikelPublish) {
    echo "<script>alert('ID artikel tidak ditemukan'); window.location='?page=admin/artikelPublish';</script>";
    exit;
}

$data = $koneksi->query("
    SELECT 
        ap.idArtikelPublish,
        ap.judulArtikelPublish,
        ap.isiArtikelPublish,
        ap.kategori,
        ap.tglTerbit,
        ap.idArtikel,
        ap.kodePenulis,
        ap.status,
        apj.gambarjurnal,
        apj.judulArtikel AS judulArtikelPengajuan
    FROM artikelpublish ap
    JOIN artikelpengajuan apj ON ap.idArtikel = apj.idArtikel
    WHERE ap.idArtikelPublish='$idArtikelPublish'
")->fetch_assoc();

if (!$data) {
    echo "<script>alert('Data tidak ditemukan'); window.location='?page=admin/artikelPublish';</script>";
    exit;
}

if(isset($_POST['edit'])){
    $judulArtikelPublish = $_POST['judulArtikelPublish'];
    $kategori = $_POST['kategori'];
    $tglTerbit = $_POST['tglTerbit'];
    $isiArtikelPublish = $_POST['isiArtikelPublish'];
    $status = $_POST['status'];

    $idArtikel = $data['idArtikel'];
    $rowG = $koneksi->query("SELECT gambarjurnal FROM artikelpengajuan WHERE idArtikel='$idArtikel'")->fetch_assoc();
    $oldGambar = $rowG['gambarjurnal'];


    if(isset($_FILES['gambarjurnal']) && $_FILES['gambarjurnal']['error'] == 0){
        $namaFile = time().'_'.$_FILES['gambarjurnal']['name'];
        $targetPath = '../uploads/'.$namaFile;

        if(move_uploaded_file($_FILES['gambarjurnal']['tmp_name'], $targetPath)){
            if($oldGambar && file_exists('../uploads/'.$oldGambar)){
                unlink('../uploads/'.$oldGambar);
            }
            $newGambar = $namaFile;

            $koneksi->query("UPDATE artikelpengajuan SET gambarjurnal='$newGambar' WHERE idArtikel='$idArtikel'");
        }
    }

    $updateQuery = "UPDATE artikelpublish 
                    SET judulArtikelPublish='$judulArtikelPublish', kategori='$kategori', 
                        tglTerbit='$tglTerbit', isiArtikelPublish='$isiArtikelPublish', 
                        status='$status' 
                    WHERE idArtikelPublish='$idArtikelPublish'";

    if($koneksi->query($updateQuery)){
        echo "<script>alert('Data berhasil diubah'); window.location='?page=admin/artikelPublish';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan: ".$koneksi->error."');</script>";
    }
}
?>

<div class="row mb-5">
    <div class="col-12">
        <div class="card">
        <div class="card-header">
            <h3>Edit Artikel Publish</h3>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Judul Artikel</label>
                <input type="text" name="judulArtikelPublish" class="form-control" value="<?= htmlspecialchars($data['judulArtikelPublish']); ?>" required>
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <select name="kategori" class="form-control" required>
                <option value="">Pilih Kategori</option>
                <option value="berita" <?= ($data['kategori']=='berita')?'selected':''; ?>>Berita</option>
                <option value="olahraga" <?= ($data['kategori']=='olahraga')?'selected':''; ?>>Olahraga</option>
                <option value="sastra & budaya" <?= ($data['kategori']=='sastra & budaya')?'selected':''; ?>>Sastra & Budaya</option>
                <option value="keagamaan" <?= ($data['kategori']=='keagamaan')?'selected':''; ?>>Keagamaan</option>
                </select>
            </div>

            <div class="form-group">
                <label>Tanggal Terbit</label>
                <input type="date" name="tglTerbit" class="form-control" value="<?= $data['tglTerbit']; ?>" required>
            </div>

            <div class="form-group">
                <label>Isi Artikel</label>
                <textarea name="isiArtikelPublish" class="form-control" rows="5" required><?= htmlspecialchars($data['isiArtikelPublish']); ?></textarea>
            </div>

            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control" required>
                <option value="baru" <?= ($data['status']=='baru')?'selected':''; ?>>Baru</option>
                <option value="lama" <?= ($data['status']=='lama')?'selected':''; ?>>Lama</option>
                </select>
            </div>

            <div class="form-group">
                <label>Gambar Saat Ini</label><br>
                <?php if(!empty($data['gambarjurnal']) && file_exists('../uploads/'.$data['gambarjurnal'])): ?>
                <img src="../uploads/<?= htmlspecialchars($data['gambarjurnal']); ?>" width="150" class="img-thumbnail"><br>
                <?php else: ?>
                <span>-</span><br>
                <?php endif; ?>
                <label>Ganti Gambar (opsional)</label>
                <input type="file" name="gambarjurnal" class="form-control-file" accept="image/*">
            </div>

            <button type="submit" name="edit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="?page=admin/artikelPublish" class="btn btn-secondary">Batal</a>
            </form>
        </div>
        </div>
    </div>
</div>
