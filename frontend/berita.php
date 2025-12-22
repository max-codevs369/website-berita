<?php
include 'koneksi.php';

$pageArtikel = isset($_GET['pageArtikel']) ? (int)$_GET['pageArtikel'] : 1;
$limit = 3;
$offset = ($pageArtikel - 1) * $limit;

$kategori = isset($_GET['kategori']) ? $_GET['kategori'] : '';

$kategoriList = [];
$kategoriQuery = $koneksi->query("SELECT DISTINCT kategori FROM artikelpublish");
while ($k = $kategoriQuery->fetch_assoc()) {
    $kategoriList[] = $k['kategori'];
}

$totalSql = "SELECT COUNT(*) AS total FROM artikelpublish WHERE 1";
$params = [];
$types = '';
if ($kategori) {
    $totalSql .= " AND kategori = ?";
    $params[] = $kategori;
    $types .= 's';
}
$stmtTotal = $koneksi->prepare($totalSql);
if ($params) {
    $stmtTotal->bind_param($types, ...$params);
}
$stmtTotal->execute();
$totalResult = $stmtTotal->get_result()->fetch_assoc();
$totalArtikel = $totalResult['total'];
$totalPages = ceil($totalArtikel / $limit);

$sql = "
SELECT ap.idArtikelPublish, ap.judulArtikelPublish, ap.isiArtikelPublish, ap.tglTerbit,
ap.status, ap.kategori, apj.gambarjurnal, p.namaPenulis
FROM artikelpublish ap
JOIN artikelpengajuan apj ON ap.idArtikel = apj.idArtikel
JOIN penulis p ON ap.kodePenulis = p.kodePenulis
WHERE 1
";

if ($kategori) {
    $sql .= " AND ap.kategori = ?";
}

$sql .= "
ORDER BY 
    CASE ap.status 
        WHEN 'baru' THEN 0
        WHEN 'lama' THEN 1
        ELSE 2
    END ASC,         
    ap.tglTerbit DESC,  
    ap.idArtikelPublish DESC 
LIMIT ?, ?
";


$stmt = $koneksi->prepare($sql);

if ($kategori) {
    $stmt->bind_param($types . 'ii', $kategori, $offset, $limit);
} else {
    $stmt->bind_param('ii', $offset, $limit);
}

$stmt->execute();
$artikel = $stmt->get_result();
?>

<div class="container py-5">
    <h2 class="fw-bold mb-4 text-center">Daftar Berita</h2>

    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card shadow-sm mb-4">
                <div class="card-body p-3">
                    <h5 class="fw-bold text-uppercase mb-3">Kategori</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item <?= empty($kategori) ? 'active' : '' ?>">
                            <a href="index.php?page=berita" class="text-decoration-none <?= empty($kategori) ? 'text-white' : '' ?>">Semua</a>
                        </li>
                        <?php foreach($kategoriList as $kat): ?>
                            <li class="list-group-item <?= ($kategori==$kat) ? 'active' : '' ?>">
                                <a href="index.php?page=berita&kategori=<?= urlencode($kat) ?>" 
                                class="text-decoration-none <?= ($kategori==$kat) ? 'text-white' : '' ?>">
                                    <?= htmlspecialchars($kat) ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="row g-4">
                <?php if($artikel->num_rows > 0): ?>
                    <?php while($row = $artikel->fetch_assoc()): ?>
                        <div class="col-md-4">
                            <div class="card h-100 shadow-sm">
                                <img src="uploads/<?= !empty($row['gambarjurnal']) ? $row['gambarjurnal'] : 'default.jpg' ?>" class="card-img-top" alt="<?= htmlspecialchars($row['judulArtikelPublish']); ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?= htmlspecialchars($row['judulArtikelPublish']); ?></h5>
                                    <p class="card-text text-muted"><?= substr(strip_tags($row['isiArtikelPublish']), 0, 100) ?>...</p>
                                    <p class="text-muted small mb-2">Oleh: <?= htmlspecialchars($row['namaPenulis']); ?></p>
                                    <a href="index.php?page=detail&id=<?= $row['idArtikelPublish']; ?>" class="btn btn-outline-primary btn-sm">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <div class="col-12 text-center">
                        <p class="text-muted">Belum ada artikel yang dipublish.</p>
                    </div>
                <?php endif; ?>
            </div>

            <?php if($totalPages > 1): ?>
                <nav class="mt-4">
                    <ul class="pagination justify-content-center">
                        <?php for($i=1; $i<=$totalPages; $i++): ?>
                            <li class="page-item <?= ($i==$pageArtikel) ? 'active' : '' ?>">
                                <a class="page-link" href="index.php?page=berita&pageArtikel=<?= $i ?><?= $kategori ? '&kategori='.urlencode($kategori) : '' ?>"><?= $i ?></a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </nav>
            <?php endif; ?>
        </div>
    </div>
</div>
