<?php
include 'koneksi.php'; 

$id = $_GET['id'] ?? null;
$artikel = null;

if ($id) {
    $sql = "
        SELECT ap.judulArtikelPublish, ap.isiArtikelPublish, ap.tglTerbit, ap.kategori,
        apj.gambarjurnal, p.namaPenulis
        FROM artikelpublish ap
        JOIN artikelpengajuan apj ON ap.idArtikel = apj.idArtikel
        JOIN penulis p ON ap.kodePenulis = p.kodePenulis
        WHERE ap.idArtikelPublish = ?
    ";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $artikel = $result->fetch_assoc();
}

if (isset($_SESSION['nisn']) && $_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['isiKomentar'])) {
    $isiKomentar = $_POST['isiKomentar'];
    $nisn = $_SESSION['nisn'];

    $sqlInsert = "INSERT INTO komentar (isiKomentar, nisn, idArtikelPublish) VALUES (?, ?, ?)";
    $stmt = $koneksi->prepare($sqlInsert);
    $stmt->bind_param("ssi", $isiKomentar, $nisn, $id);
    $stmt->execute();

    header("Location: index.php?page=detail&id=$id");
    exit();
}

$komentar = [];
if ($id) {
    $sqlKomentar = "
        SELECT k.isiKomentar, k.tglKomentar, s.namaSiswa
        FROM komentar k
        JOIN siswa s ON k.nisn = s.nisn
        WHERE k.idArtikelPublish = ?
        ORDER BY k.tglKomentar DESC
    ";
    $stmt = $koneksi->prepare($sqlKomentar);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $komentar = $result->fetch_all(MYSQLI_ASSOC);
}
?>

<div class="container py-5">
    <?php if (!empty($artikel)): ?>
        <h2 class="fw-bold"><?= htmlspecialchars($artikel['judulArtikelPublish']); ?></h2>
        <p class="text-muted">
            Dipublikasikan pada: <?= date("d F Y", strtotime($artikel['tglTerbit'])); ?> |
            Oleh: <?= htmlspecialchars($artikel['namaPenulis']); ?> |
            <?= htmlspecialchars($artikel['kategori']); ?>
        </p>
        
        <?php if (!empty($artikel['gambarjurnal'])): ?>
            <img src="uploads/<?= htmlspecialchars($artikel['gambarjurnal']); ?>" 
                alt="<?= htmlspecialchars($artikel['judulArtikelPublish']); ?>" 
                class="img-fluid mb-3 rounded shadow-sm">
        <?php endif; ?>

        <p><?= nl2br(htmlspecialchars($artikel['isiArtikelPublish'])); ?></p>

        <hr>
        <h4>Komentar</h4>

        <?php if (!empty($komentar)): ?>
            <?php foreach ($komentar as $k): ?>
                <div class="border p-3 mb-2 rounded">
                    <strong><?= htmlspecialchars($k['namaSiswa']); ?></strong> 
                    <small class="text-muted">(<?= date("d M Y H:i", strtotime($k['tglKomentar'])); ?>)</small>
                    <p class="mb-0"><?= nl2br(htmlspecialchars($k['isiKomentar'])); ?></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-muted">Belum ada komentar. Jadilah yang pertama!</p>
        <?php endif; ?>

        <?php if (isset($_SESSION['nisn'])): ?>
            <div class="mt-4">
                <form method="post">
                    <div class="mb-3">
                        <label for="isiKomentar" class="form-label">Tulis Komentar</label>
                        <textarea class="form-control" name="isiKomentar" id="isiKomentar" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        <?php else: ?>
            <p class="text-muted">Silakan <a href="login.php">login</a> terlebih dahulu untuk menulis komentar.</p>
        <?php endif; ?>

    <?php else: ?>
        <h2 class="fw-bold">Berita Tidak Ditemukan</h2>
        <p class="text-muted">Maaf, berita yang Anda cari tidak tersedia.</p>
    <?php endif; ?>
</div>
