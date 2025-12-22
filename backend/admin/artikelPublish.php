<div class="row mb-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Journal School</h3>
            </div>
            <div class="card-body">
                <p>
                    <a href="?page=admin/pengajuan" class="btn btn-primary">Ke Pengajuan Artikel</a>
                </p>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                            <input type="text" id="customSearch" class="form-control" placeholder="Cari artikel...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table id="artikelTable" class="table table-bordered table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Artikel Publish</th>
                            <th>Nama Penulis</th>
                            <th>Kategori</th>
                            <th>Tanggal Terbit</th>
                            <th>Artikel Publish</th>
                            <th>Gambar</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        include "../koneksi.php";
                        $query = mysqli_query($koneksi, "SELECT * 
                        FROM artikelpublish ap
                        JOIN artikelpengajuan apj ON ap.idArtikel = apj.idArtikel
                        JOIN penulis p ON ap.kodePenulis = p.kodePenulis
                        ORDER BY 
                            CASE ap.status 
                                WHEN 'baru' THEN 0
                                WHEN 'lama' THEN 1
                                ELSE 2
                            END ASC,         
                            ap.tglTerbit DESC,  
                            ap.idArtikelPublish DESC 
                        ");
                        $no = 1;
                        while($data = mysqli_fetch_array($query)):
                        ?> 
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= htmlspecialchars(substr($data['judulArtikelPublish'], 0, 15)) ?>...</td>
                            <td><?= htmlspecialchars($data['namaPenulis']) ?></td>
                            <td><?= htmlspecialchars($data['kategori']) ?></td>
                            <td><?= htmlspecialchars($data['tglTerbit']) ?></td>
                            <td><?= htmlspecialchars(substr($data['isiArtikelPublish'], 0, 10)) ?>...</td>
                            <td>
                                <?php if (!empty($data['gambarjurnal'])): ?>
                                    <img src="../uploads/<?= htmlspecialchars($data['gambarjurnal']) ?>" width="100" height="40" alt="Gambar Artikel">
                                <?php endif; ?>
                            </td>
                            <td><?= htmlspecialchars($data['status']) ?></td>
                            <td>
                                <a href="?page=admin/editArtikelPublish&idArtikelPublish=<?= $data['idArtikelPublish']; ?>" class="btn btn-info btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="?page=admin/hapusArtikelPublish&idArtikelPublish=<?= $data['idArtikelPublish']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php 
                            $no++;
                            endwhile;
                        ?>
                    </tbody>
                </table>

                <div id="noResult" class="text-center p-3 text-muted" style="display:none;">
                    Tidak ada hasil yang cocok
                </div>
                <div class="d-flex justify-content-between align-items-center p-3">
                    <button id="prevBtn" class="btn btn-secondary btn-sm">Sebelumnya</button>
                    <span id="pageInfo"></span>
                    <button id="nextBtn" class="btn btn-secondary btn-sm">Berikutnya</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const rows = document.querySelectorAll("#artikelTable tbody tr");
    const searchInput = document.getElementById("customSearch");
    const noResult = document.getElementById("noResult");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    const pageInfo = document.getElementById("pageInfo");

    let currentPage = 1;
    const rowsPerPage = 5;

    function renderTable() {
        const keyword = searchInput.value.toLowerCase();
        const filteredRows = Array.from(rows).filter(row => row.innerText.toLowerCase().includes(keyword));

        noResult.style.display = filteredRows.length === 0 ? "block" : "none";

        const totalPages = Math.ceil(filteredRows.length / rowsPerPage) || 1;
        if(currentPage > totalPages) currentPage = totalPages;

        rows.forEach(r => r.style.display = "none");

        const start = (currentPage - 1) * rowsPerPage;
        const end = start + rowsPerPage;
        filteredRows.slice(start, end).forEach(r => r.style.display = "");

        pageInfo.innerText = `Halaman ${currentPage} dari ${totalPages}`;
        prevBtn.disabled = currentPage === 1;
        nextBtn.disabled = currentPage === totalPages;
    }

    searchInput.addEventListener("input", () => { currentPage = 1; renderTable(); });
    prevBtn.addEventListener("click", () => { if(currentPage>1){currentPage--; renderTable();} });
    nextBtn.addEventListener("click", () => { currentPage++; renderTable(); });

    renderTable();
});
</script>
