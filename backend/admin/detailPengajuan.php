<?php 
include "../koneksi.php";
$idArtikel = $_GET['idArtikel'] ?? null;

$data = mysqli_query($koneksi, "SELECT * FROM artikelpengajuan 
    JOIN penulis ON penulis.kodePenulis=artikelpengajuan.kodePenulis 
    WHERE idArtikel='$idArtikel'")->fetch_assoc();

if(isset($_POST['publikasikan'])){
    $kategori = $_POST['kategori'];
    $idArtikelPost = $_POST['idArtikel'];

    $artikel = mysqli_query($koneksi, "SELECT * FROM artikelpengajuan WHERE idArtikel='$idArtikelPost'")->fetch_assoc();

    $judul = $artikel['judulArtikel'];
    $isi = $artikel['isiArtikel'];
    $kodePenulis = $artikel['kodePenulis'];
    $tglTerbit = date('Y-m-d');
    $status = 'baru';

    $stmt = $koneksi->prepare("INSERT INTO artikelpublish (judulArtikelPublish, isiArtikelPublish, kategori, tglTerbit, idArtikel, kodePenulis, status) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssis", $judul, $isi, $kategori, $tglTerbit, $idArtikelPost, $kodePenulis, $status);

    if($stmt->execute()){
        echo "<script>alert('Artikel berhasil dipublikasikan'); window.location='?page=admin/artikelPublish';</script>";
    } else {
        echo "<script>alert('Gagal mempublikasikan artikel');</script>";
    }
    $stmt->close();
}
?>

<div class="container my-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white text-center py-5">
            <h1 class="mb-0"><?= htmlspecialchars($data['judulArtikel']); ?></h1>
        </div>

        <div class="card-body text-center px-4">

            <?php if(!empty($data['gambarjurnal'])): ?>
            <div class="my-4">
                <img src="../uploads/<?= htmlspecialchars($data['gambarjurnal']); ?>" 
                    class="img-fluid rounded" 
                    style="max-height: 250px; object-fit: cover;" 
                    alt="Gambar Artikel">
            </div>
            <?php endif; ?>

            <div class="mb-4">
                <span class="badge badge-info p-2 mx-2"><b>Penulis:</b> <?= htmlspecialchars($data['namaPenulis']); ?></span>
                <span class="badge badge-secondary p-2 mx-2"><b>Tanggal:</b> <?= htmlspecialchars($data['tglPengajuan']); ?></span>
            </div>

            <div class="text-center mb-4" style="line-height:1.7; font-size:1.1rem;">
                <p><?= nl2br(htmlspecialchars($data['isiArtikel'])); ?></p>
            </div>

            <div class="mb-4">
                <button type="button" class="btn btn-success btn-lg shadow-sm" data-toggle="modal" data-target="#publikasiModal">
                    <i class="fas fa-upload"></i> Publikasikan
                </button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="publikasiModal" tabindex="-1" role="dialog" aria-labelledby="publikasiModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="publikasiModalLabel">Pilih Kategori Artikel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="idArtikel" value="<?= $data['idArtikel']; ?>">
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select class="form-control" name="kategori" required>
                            <option value="">Pilih Kategori</option>
                            <option value="berita">Berita</option>
                            <option value="olahraga">Olahraga</option>
                            <option value="sastra & budaya">Sastra & Budaya</option>
                            <option value="keagamaan">Keagamaan</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" name="publikasikan" class="btn btn-success">Publikasikan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Script Bootstrap & jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

