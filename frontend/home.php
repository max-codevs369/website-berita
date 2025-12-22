<section class="bg-light py-5 text-center">
    <div class="container">
        <h1 class="display-4 fw-bold text-primary">Selamat Datang di <span class="text-dark">Journal School</span></h1>
        <p class="lead text-muted">Portal berita & jurnal sekolah yang informatif, edukatif, dan inspiratif.</p>
        <a href="index.php?page=berita" class="btn btn-primary btn-lg mt-3">Lihat Berita</a>
    </div>
    </section>

    <section class="py-5">
    <div class="container">
        <h2 class="fw-bold mb-4 text-center">Berita Terbaru</h2>
        <div class="row g-4">

        <?php
        include 'koneksi.php';

        $artikel = $koneksi->query("
            SELECT ap.idArtikelPublish, ap.judulArtikelPublish, ap.isiArtikelPublish, 
            aj.gambarjurnal, p.namaPenulis, ap.tglTerbit, ap.status
            FROM artikelpublish ap
            JOIN artikelpengajuan aj ON ap.idArtikel = aj.idArtikel
            JOIN penulis p ON ap.kodePenulis = p.kodePenulis
            ORDER BY 
            CASE ap.status 
                WHEN 'baru' THEN 0
                ELSE 1
            END ASC,       
            ap.tglTerbit DESC,   
            ap.idArtikelPublish DESC  
            LIMIT 3;
        ");

        if ($artikel->num_rows > 0):
            while($row = $artikel->fetch_assoc()):
        ?>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="uploads/<?= !empty($row['gambarjurnal']) ? $row['gambarjurnal'] : 'default.jpg' ?>" 
                        class="card-img-top" alt="<?= $row['judulArtikelPublish'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['judulArtikelPublish'] ?></h5>
                        <p class="card-text text-muted">
                            <?= substr(strip_tags($row['isiArtikelPublish']), 0, 100) ?>...
                        </p>
                        <p class="small text-secondary">Oleh: <?= $row['namaPenulis'] ?></p>
                        <a href="index.php?page=detail&id=<?= $row['idArtikelPublish'] ?>" class="btn btn-outline-primary btn-sm">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        <?php 
            endwhile;
        else:
        ?>
            <div class="col-12 text-center">
                <p class="text-muted">Belum ada artikel yang dipublish.</p>
            </div>
        <?php endif; ?>

        </div>
    </div>
    </section>

    <section class="bg-primary text-light py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-3">Tentang Journal School</h2>
        <p class="lead">Journal School adalah portal berita dan jurnal resmi sekolah yang bertujuan memberikan informasi aktual, 
        prestasi siswa, kegiatan guru, serta artikel edukatif untuk mendukung dunia pendidikan.</p>
        <a href="index.php?page=tentang" class="btn btn-light mt-3">Pelajari Lebih Lanjut</a>
    </div>
</section>
