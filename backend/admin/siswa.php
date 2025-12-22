<div class="row mb-4">
  <div class="col-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title mb-0">Data Siswa Yang Mendaftar Ke Journal School</h3>
        <a href="?page=admin/t_siswa" class="btn btn-primary">Tambah Data</a>
      </div>
      <div class="card-body">
        <div class="row mb-3">
          <div class="col-md-6 mb-2">
            <input type="text" id="searchInput" class="form-control" placeholder="Cari siswa...">
          </div>
          <div class="col-md-6 text-end mb-2">
            <label for="rowsPerPage" class="me-2">Tampilkan per halaman:</label>
            <select id="rowsPerPage" class="form-control d-inline-block" style="width:auto;">
              <option value="5">5</option>
              <option value="10" selected>10</option>
              <option value="25">25</option>
              <option value="50">50</option>
              <option value="100">100</option>
            </select>
          </div>
        </div>

        <div class="table-responsive">
          <table class="table table-bordered table-hover" id="siswaTable">
            <thead class="table-light">
              <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Jenis Kelamin</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              include "../koneksi.php";
              $query = mysqli_query($koneksi, "SELECT * FROM siswa");
              $no = 1;
              while($data = mysqli_fetch_array($query)): ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= htmlspecialchars($data['nisn']); ?></td>
                <td><?= htmlspecialchars($data['namaSiswa']); ?></td>
                <td><?= htmlspecialchars($data['kelas']); ?></td>
                <td><?= htmlspecialchars($data['jurusan']); ?></td>
                <td><?= htmlspecialchars($data['jk']); ?></td>
                <td>
                  <a href="?page=admin/editSiswa&nisn=<?= $data['nisn']; ?>" class="btn btn-info btn-sm"><span class="icon text-white-50"><i class="fas fa-edit"></i></span></a>
                  
                  <a href="?page=admin/hapusSiswa&nisn=<?= $data['nisn']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus siswa ini?')">  <span class="icon text-white-50"><i class="fas fa-trash"></i></span></a>
                </td>
              </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-3">
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
    const table = document.getElementById("siswaTable");
    const rows = Array.from(table.querySelectorAll("tbody tr"));
    const searchInput = document.getElementById("searchInput");
    const rowsPerPageSelect = document.getElementById("rowsPerPage");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    const pageInfo = document.getElementById("pageInfo");

    let currentPage = 1;
    let rowsPerPage = parseInt(rowsPerPageSelect.value);
    let filteredRows = rows;

    function renderTable() {
        const totalPages = Math.ceil(filteredRows.length / rowsPerPage);
        if(currentPage > totalPages) currentPage = totalPages || 1;

        rows.forEach(r => r.style.display = "none");

        if (filteredRows.length === 0) {
            if (!document.getElementById("noDataRow")) {
                const noDataRow = document.createElement("tr");
                noDataRow.id = "noDataRow";
                noDataRow.innerHTML = `<td colspan="7" class="text-center text-muted">Tidak ada data yang sesuai</td>`;
                table.querySelector("tbody").appendChild(noDataRow);
            }
            pageInfo.innerText = `Halaman 0 dari 0`;
            prevBtn.disabled = true;
            nextBtn.disabled = true;
            return;
        } else {
            const noDataRow = document.getElementById("noDataRow");
            if (noDataRow) noDataRow.remove();
        }

        const start = (currentPage - 1) * rowsPerPage;
        const end = start + rowsPerPage;
        filteredRows.slice(start, end).forEach((row, i) => {
            row.style.display = "";
            row.cells[0].innerText = start + i + 1; 
        });

        pageInfo.innerText = `Halaman ${currentPage} dari ${totalPages}`;
        prevBtn.disabled = currentPage === 1;
        nextBtn.disabled = currentPage === totalPages;
    }

    searchInput.addEventListener("input", function () {
        const keyword = this.value.toLowerCase();
        filteredRows = rows.filter(row => {
            const cells = Array.from(row.cells).slice(0, -1);
            return cells.some(cell => 
                cell.innerText.toLowerCase().includes(keyword)
            );
        });
        currentPage = 1;
        renderTable();
    });

    rowsPerPageSelect.addEventListener("change", function () {
        rowsPerPage = parseInt(this.value);
        currentPage = 1;
        renderTable();
    });

    prevBtn.addEventListener("click", () => { if(currentPage > 1){ currentPage--; renderTable(); } });
    nextBtn.addEventListener("click", () => { currentPage++; renderTable(); });

    renderTable();
});
</script>

