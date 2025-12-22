<?php
include "../koneksi.php";

$query = mysqli_query($koneksi, "
                    SELECT ap.*, p.namaPenulis 
                    FROM artikelpengajuan ap
                    JOIN penulis p ON p.kodePenulis = ap.kodePenulis
                    LEFT JOIN artikelpublish apub ON ap.idArtikel = apub.idArtikel
                    WHERE apub.idArtikel IS NULL ORDER BY ap.idArtikel DESC;
                    ");

$totalData = mysqli_num_rows($query);
?>

<div class="row mb-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header text-center">
                <h1 style="padding: 50px 0;">Artikel Pengajuan</h1>
            </div>
            <div class="card-body table-responsive p-3">

                <div class="mb-3 row">
                    <div class="col-md-6">
                        <label for="rowsPerPage">Tampilkan per halaman:</label>
                        <select id="rowsPerPage" class="form-control" style="width: auto; display: inline-block;">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    <div class="col-md-6 text-end">
                        <p>Total Data: <strong><?= $totalData ?></strong></p>
                    </div>
                </div>

                <?php if($totalData > 0): ?>
                <table class="table table-striped table-bordered" id="artikelTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Artikel Pengajuan</th>
                            <th>Nama Penulis</th>
                            <th>Tanggal Pengajuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($data = mysqli_fetch_array($query)): ?>
                        <tr>
                            <td></td>
                            <td>
                                <a href="?page=admin/detailPengajuan&idArtikel=<?= $data['idArtikel'] ?>">
                                    <?= htmlspecialchars($data['judulArtikel']) ?>
                                </a>
                            </td>
                            <td><?= htmlspecialchars($data['namaPenulis']) ?></td>
                            <td><?= htmlspecialchars($data['tglPengajuan']) ?></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>

                <?php else: ?>
                    <div class="text-center p-4">
                        <h4>Belum ada artikel yang diajukan.</h4>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const table = document.getElementById("artikelTable");
    if(!table) return; 

    const rows = table.querySelectorAll("tbody tr");
    const rowsPerPageSelect = document.getElementById("rowsPerPage");

    function renderTable() {
        const rowsPerPage = parseInt(rowsPerPageSelect.value);
        rows.forEach((row, index) => {
            row.style.display = (index < rowsPerPage) ? "" : "none";
            row.cells[0].innerText = index + 1; 
        });
    }

    rowsPerPageSelect.addEventListener("change", renderTable);

    renderTable(); 
});
</script>

