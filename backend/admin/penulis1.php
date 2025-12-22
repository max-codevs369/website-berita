<?php
include "../koneksi.php";
$sql = mysqli_query($koneksi, "SELECT * FROM penulis JOIN siswa ON siswa.nisn=penulis.nisn");
$allData = mysqli_fetch_all($sql, MYSQLI_ASSOC);
?>

<div class="row mb-5">
  <div class="col-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">Daftar Penulis Journal School</h3>
        <a href="?page=admin/t_penulis" class="btn btn-primary">Tambah Data</a>
      </div>

      <div class="card-body">
        <div class="mb-3 d-flex justify-content-between align-items-center">
          <input type="text" id="searchInput" class="form-control" placeholder="Cari NISN atau Nama Penulis" style="width: 300px;">
        </div>

        <div class="table-responsive">
          <table class="table table-bordered" id="penulisTable">
            <thead>
              <tr>
                <th style="width:50px;">No</th>
                <th>NISN</th>
                <th>Nama Penulis</th>
                <th style="width:150px;">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($allData as $index => $data): ?>
              <tr>
                <td><?= $index + 1 ?></td>
                <td><?= htmlspecialchars($data['nisn']) ?></td>
                <td><?= htmlspecialchars($data['namaPenulis']) ?></td>
                <td>
                  <a href="?page=admin/editPenulis&kodePenulis=<?= $data['kodePenulis'] ?>" class="btn btn-info btn-sm mb-1"><span class="icon text-white-50"><i class="fas fa-edit"></i></span></a>
                  <a href="?page=admin/hapusPenulis&kodePenulis=<?= $data['kodePenulis'] ?>" class="btn btn-danger btn-sm mb-1" onclick="return confirm('Yakin ingin menghapus penulis ini?')"><span class="icon text-white-50"><i class="fas fa-trash"></i></span></a>
                </td>
              </tr>
              <?php endforeach; ?>
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
  const table = document.getElementById("penulisTable");
  const tbody = table.querySelector("tbody");
  const allRows = Array.from(tbody.querySelectorAll("tr"));
  const searchInput = document.getElementById("searchInput");
  const pageInfo = document.getElementById("pageInfo");
  const prevBtn = document.getElementById("prevBtn");
  const nextBtn = document.getElementById("nextBtn");

  let currentPage = 1;
  const rowsPerPage = 5;

  function renderTable() {
    const filter = searchInput.value.toLowerCase();

    const filteredRows = allRows.filter(row => {
      const nisn = row.cells[1].innerText.toLowerCase();
      const nama = row.cells[2].innerText.toLowerCase();
      return nisn.includes(filter) || nama.includes(filter);
    });

    tbody.querySelectorAll("tr").forEach(r => r.style.display = "none");

    if (filteredRows.length === 0) {
      let noResultRow = tbody.querySelector(".no-result");
      if (!noResultRow) {
        noResultRow = document.createElement("tr");
        noResultRow.classList.add("no-result");
        noResultRow.innerHTML = `<td colspan="4" class="text-center">Tidak ada hasil yang cocok</td>`;
        tbody.appendChild(noResultRow);
      }
      noResultRow.style.display = "";
      pageInfo.innerText = `Halaman 0 dari 0`;
      prevBtn.disabled = true;
      nextBtn.disabled = true;
      return;
    }

    const totalPages = Math.ceil(filteredRows.length / rowsPerPage);
    if (currentPage > totalPages) currentPage = totalPages || 1;

    const start = (currentPage - 1) * rowsPerPage;
    const end = start + rowsPerPage;
    filteredRows.slice(start, end).forEach((row, idx) => {
      row.style.display = "";
      row.cells[0].innerText = start + idx + 1;
    });

    pageInfo.innerText = `Halaman ${currentPage} dari ${totalPages}`;
    prevBtn.disabled = currentPage === 1;
    nextBtn.disabled = currentPage === totalPages;
  }

  searchInput.addEventListener("input", () => {
    currentPage = 1;
    renderTable();
  });

  prevBtn.addEventListener("click", () => {
    if (currentPage > 1) {
      currentPage--;
      renderTable();
    }
  });

  nextBtn.addEventListener("click", () => {
    currentPage++;
    renderTable();
  });

  renderTable();
});
</script>

