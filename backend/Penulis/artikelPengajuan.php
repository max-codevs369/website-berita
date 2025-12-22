<?php
include __DIR__ . "/../../koneksi.php";
$kodePenulis = $_SESSION['kodePenulis'] ?? null;

if (!$kodePenulis) {
    echo "<script>alert('Silakan login terlebih dahulu'); window.location.href='?page=login';</script>";
    exit;
}

if (isset($_GET['hapus'])) {
    $idArtikel = intval($_GET['hapus']);
    
    $stmtG = $koneksi->prepare("SELECT gambarjurnal FROM artikelpengajuan WHERE idArtikel=? AND kodePenulis=?");
    $stmtG->bind_param("ii", $idArtikel, $kodePenulis);
    $stmtG->execute();
    $resultG = $stmtG->get_result();
    
    if ($rowG = $resultG->fetch_assoc()) {
        $oldGambar = $rowG['gambarjurnal'];
        if ($oldGambar && file_exists("../Uploads/" . $oldGambar)) {
            unlink("../Uploads/" . $oldGambar);
        }
        
        $stmt = $koneksi->prepare("DELETE FROM artikelpengajuan WHERE idArtikel=? AND kodePenulis=?");
        $stmt->bind_param("ii", $idArtikel, $kodePenulis);
        if ($stmt->execute()) {
            echo "<script>alert('Artikel berhasil dihapus'); window.location.href='?page=Penulis/artikelPengajuan';</script>";
        } else {
            echo "<script>alert('Gagal menghapus artikel: " . addslashes($koneksi->error) . "'); window.location.href='?page=Penulis/artikelPengajuan';</script>";
        }
        $stmt->close();
    } else {
        echo "<script>alert('Artikel tidak ditemukan atau Anda tidak memiliki akses'); window.location.href='?page=Penulis/artikelPengajuan';</script>";
    }
    $stmtG->close();
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tambahArtikel'])) {
    $judul = trim($_POST['judulArtikel']);
    $isi = trim($_POST['isiArtikel']);
    $tgl = date("Y-m-d");
    $gambar = '';

    if (empty($judul) || empty($isi)) {
        echo "<script>alert('Judul dan isi artikel wajib diisi'); window.location.href='?page=Penulis/artikelPengajuan';</script>";
        exit;
    }

    if (!empty($_FILES['gambarjurnal']['name'])) {
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        $maxFileSize = 5 * 1024 * 1024; 
        $fileType = $_FILES['gambarjurnal']['type'];
        $fileSize = $_FILES['gambarjurnal']['size'];

        if (!in_array($fileType, $allowedTypes)) {
            echo "<script>alert('Jenis file tidak diizinkan. Gunakan JPG, PNG, atau GIF'); window.location.href='?page=Penulis/artikelPengajuan';</script>";
            exit;
        }
        if ($fileSize > $maxFileSize) {
            echo "<script>alert('Ukuran file terlalu besar. Maksimum 5MB'); window.location.href='?page=Penulis/artikelPengajuan';</script>";
            exit;
        }

        $targetDir = "../Uploads/";
        if (!file_exists($targetDir)) mkdir($targetDir, 0777, true);
        $fileName = time() . "_" . basename($_FILES['gambarjurnal']['name']);
        $targetFilePath = $targetDir . $fileName;

        if (move_uploaded_file($_FILES["gambarjurnal"]["tmp_name"], $targetFilePath)) {
            $gambar = $fileName;
        } else {
            echo "<script>alert('Gagal mengunggah gambar'); window.location.href='?page=Penulis/artikelPengajuan';</script>";
            exit;
        }
    }

    $stmt = $koneksi->prepare("INSERT INTO artikelpengajuan (judulArtikel, isiArtikel, tglPengajuan, kodePenulis, gambarjurnal) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssis", $judul, $isi, $tgl, $kodePenulis, $gambar);
    if ($stmt->execute()) {
        echo "<script>alert('Artikel berhasil diajukan'); window.location.href='?page=Penulis/artikelPengajuan';</script>";
    } else {
        echo "<script>alert('Gagal mengajukan artikel: " . addslashes($koneksi->error) . "'); window.location.href='?page=Penulis/artikelPengajuan';</script>";
    }
    $stmt->close();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['editArtikel'])) {
    $idArtikel = intval($_POST['idArtikel']);
    $judul = trim($_POST['judulArtikel']);
    $isi = trim($_POST['isiArtikel']);

    if (empty($judul) || empty($isi)) {
        echo "<script>alert('Judul dan isi artikel wajib diisi'); window.location.href='?page=Penulis/artikelPengajuan';</script>";
        exit;
    }

    $stmtG = $koneksi->prepare("SELECT gambarjurnal FROM artikelpengajuan WHERE idArtikel=? AND kodePenulis=?");
    $stmtG->bind_param("ii", $idArtikel, $kodePenulis);
    $stmtG->execute();
    $resultG = $stmtG->get_result();
    $oldGambar = $resultG->fetch_assoc()['gambarjurnal'] ?? '';
    $stmtG->close();

    $gambar = $oldGambar;
    if (!empty($_FILES['gambarjurnal']['name'])) {
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        $maxFileSize = 5 * 1024 * 1024;
        $fileType = $_FILES['gambarjurnal']['type'];
        $fileSize = $_FILES['gambarjurnal']['size'];

        if (!in_array($fileType, $allowedTypes)) {
            echo "<script>alert('Jenis file tidak diizinkan. Gunakan JPG, PNG, atau GIF'); window.location.href='?page=Penulis/artikelPengajuan';</script>";
            exit;
        }
        if ($fileSize > $maxFileSize) {
            echo "<script>alert('Ukuran file terlalu besar. Maksimum 5MB'); window.location.href='?page=Penulis/artikelPengajuan';</script>";
            exit;
        }

        $targetDir = "../Uploads/";
        if (!file_exists($targetDir)) mkdir($targetDir, 0777, true);
        $fileName = time() . "_" . basename($_FILES['gambarjurnal']['name']);
        $targetFilePath = $targetDir . $fileName;

        if (move_uploaded_file($_FILES["gambarjurnal"]["tmp_name"], $targetFilePath)) {
            if ($oldGambar && file_exists($targetDir . $oldGambar)) {
                unlink($targetDir . $oldGambar);
            }
            $gambar = $fileName;
        } else {
            echo "<script>alert('Gagal mengunggah gambar'); window.location.href='?page=Penulis/artikelPengajuan';</script>";
            exit;
        }
    }

    $stmt = $koneksi->prepare("UPDATE artikelpengajuan SET judulArtikel=?, isiArtikel=?, gambarjurnal=? WHERE idArtikel=? AND kodePenulis=?");
    $stmt->bind_param("sssii", $judul, $isi, $gambar, $idArtikel, $kodePenulis);
    if ($stmt->execute()) {
        echo "<script>alert('Artikel berhasil diperbarui'); window.location.href='?page=Penulis/artikelPengajuan';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui artikel: " . addslashes($koneksi->error) . "'); window.location.href='?page=Penulis/artikelPengajuan';</script>";
    }
    $stmt->close();
}

$sql = "SELECT a.*, 
        CASE 
          WHEN p.idArtikel IS NOT NULL THEN 'Disetujui'
          ELSE 'Pending'
        END as statusAkhir
        FROM artikelpengajuan a
        LEFT JOIN artikelpublish p ON a.idArtikel = p.idArtikel
        WHERE a.kodePenulis = ?
        ORDER BY a.idArtikel DESC";
$stmt = $koneksi->prepare($sql);
$stmt->bind_param("i", $kodePenulis);
$stmt->execute();
$artikel = $stmt->get_result();
$stmt->close();
?>

<div class="container pb-5">
  <div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h3 class="card-title mb-0">Artikel Pengajuan Saya</h3>
      <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahModal">
        <i class="fas fa-plus"></i> Tambah Artikel
      </button>
    </div>
    <div class="card-body">
        <div class="row mb-3">
      <div class="col-md-4">
        <input type="text" id="customSearch" class="form-control" placeholder="Cari artikel...">
      </div>
    </div>
    <div class="table-responsive">
      <table id="artikelTable" class="table table-bordered table-hover">
        <thead class="thead-light">
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Gambar</th>
            <th style="width: 180px">Aksi</th>
          </tr>
        </thead>
        <tbody id="artikelBody">
          <?php $no=1; while ($row = $artikel->fetch_assoc()): ?>
          <tr>
            <td><?= $no++ ?></td>
            <td class="judul"><?= htmlspecialchars($row['judulArtikel']) ?></td>
            <td><?= htmlspecialchars($row['tglPengajuan']) ?></td>
            <td>
              <?php if ($row['statusAkhir'] == 'Pending'): ?>
                <span class="badge badge-warning">Belum Dipublikasikan</span>
              <?php else: ?>
                <span class="badge badge-success">Sudah Dipublikasikan</span>
              <?php endif; ?>
            </td>
            <td>
              <?php if (!empty($row['gambarjurnal']) && file_exists("../Uploads/" . $row['gambarjurnal'])): ?>
                  <img src="../Uploads/<?= htmlspecialchars($row['gambarjurnal']) ?>" width="80" class="img-thumbnail" alt="Gambar Artikel">
              <?php else: ?>
                  <span>-</span>
              <?php endif; ?>
            </td>
            <td>
              <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#lihatModal<?= $row['idArtikel'] ?>"><i class="fas fa-eye"></i></button>
              <?php if ($row['statusAkhir'] == 'Pending'): ?>
                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal<?= $row['idArtikel'] ?>"><i class="fas fa-edit"></i></button>
                <a href="?page=Penulis/artikelPengajuan&hapus=<?= $row['idArtikel'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus?')"><i class="fas fa-trash"></i></a>
              <?php endif; ?>
            </td>
          </tr>

          <div class="modal fade" id="lihatModal<?= $row['idArtikel'] ?>">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"><?= htmlspecialchars($row['judulArtikel']) ?></h5>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <p><?= nl2br(htmlspecialchars($row['isiArtikel'])) ?></p>
                  <?php if ($row['gambarjurnal']): ?>
                    <img src="../Uploads/<?= htmlspecialchars($row['gambarjurnal']) ?>" class="img-fluid mt-3">
                  <?php else: ?>
                    <img src="../../uploads/no-image.jpg" class="img-fluid mt-3">
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="editModal<?= $row['idArtikel'] ?>">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <form method="POST" enctype="multipart/form-data">
                  <div class="modal-header">
                    <h5 class="modal-title">Edit Artikel</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <input type="hidden" name="idArtikel" value="<?= $row['idArtikel'] ?>">
                    <div class="form-group">
                      <label>Judul Artikel</label>
                      <input type="text" name="judulArtikel" class="form-control" value="<?= htmlspecialchars($row['judulArtikel']) ?>" required>
                    </div>
                    <div class="form-group">
                      <label>Isi Artikel</label>
                      <textarea name="isiArtikel" class="form-control" rows="5" required><?= htmlspecialchars($row['isiArtikel']) ?></textarea>
                    </div>
                    <div class="form-group">
                      <label>Gambar Baru (opsional)</label>
                      <input type="file" name="gambarjurnal" class="form-control-file" accept="image/jpeg,image/png,image/gif">
                      <?php if ($row['gambarjurnal']): ?>
                        <p>Gambar saat ini: <img src="../Uploads/<?= htmlspecialchars($row['gambarjurnal']) ?>" width="100" class="img-thumbnail"></p>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" name="editArtikel" class="btn btn-primary">Update</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>

    <div class="d-flex justify-content-between mt-3">
      <small id="pageInfo"></small>
      <div>
        <button id="prevPage" class="btn btn-secondary btn-sm">Sebelumnya</button>
        <button id="nextPage" class="btn btn-secondary btn-sm">Selanjutnya</button>
      </div>
    </div>
    </div>
  </div>
</div>

<div class="modal fade" id="tambahModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form method="POST" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Artikel</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Judul Artikel</label>
            <input type="text" name="judulArtikel" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Isi Artikel</label>
            <textarea name="isiArtikel" class="form-control" rows="5" required></textarea>
          </div>
          <div class="form-group">
            <label>Gambar (opsional)</label>
            <input type="file" name="gambarjurnal" class="form-control-file" accept="image/jpeg,image/png,image/gif">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="tambahArtikel" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const tbody = document.getElementById("artikelBody");
  const prevBtn = document.getElementById("prevPage");
  const nextBtn = document.getElementById("nextPage");
  const pageInfo = document.getElementById("pageInfo");
  const searchInput = document.getElementById("customSearch");

  let rowsPerPage = 5;   
  let currentPage = 1;

  function getAllRows() {
    return Array.from(tbody.querySelectorAll("tr")).filter(r => r.id !== "noDataRow");
  }
  function getVisibleRows() {
    return getAllRows().filter(r => r.dataset.filtered !== "1");
  }
  function ensureNoDataRow() {
    let nd = document.getElementById("noDataRow");
    const colCount = (document.querySelector("#artikelTable thead tr")?.children.length) || 6;
    const visibleRows = getVisibleRows();

    if (visibleRows.length === 0) {
      if (!nd) {
        nd = document.createElement("tr");
        nd.id = "noDataRow";
        nd.innerHTML = `<td colspan="${colCount}" class="text-center text-muted py-4">Tidak ada data yang cocok.</td>`;
        tbody.appendChild(nd);
      }
    } else if (nd) {
      nd.remove();
    }
  }

  function renderTable() {
    const allRows = getAllRows();
    const visibleRows = getVisibleRows();

    let totalPages = Math.max(1, Math.ceil(visibleRows.length / rowsPerPage));

    if (currentPage > totalPages) currentPage = totalPages;

    allRows.forEach(row => {
      row.style.display = (row.dataset.filtered === "1") ? "none" : "";
    });

    const start = (currentPage - 1) * rowsPerPage;
    const end = start + rowsPerPage;
    visibleRows.forEach((row, idx) => {
      row.style.display = (idx >= start && idx < end) ? "" : "none";
    });

    pageInfo.textContent = `Halaman ${currentPage} dari ${totalPages}`;
    prevBtn.disabled = (currentPage === 1);
    nextBtn.disabled = (currentPage === totalPages);

    ensureNoDataRow();
  }

  nextBtn.addEventListener("click", () => {
    const totalPages = Math.max(1, Math.ceil(getVisibleRows().length / rowsPerPage));
    if (currentPage < totalPages) { currentPage++; renderTable(); }
  });

  prevBtn.addEventListener("click", () => {
    if (currentPage > 1) { currentPage--; renderTable(); }
  });

  function applySearch(keyword) {
    keyword = keyword.toLowerCase();
    getAllRows().forEach(row => {
      const judulEl = row.querySelector(".judul");
      const judul = (judulEl ? judulEl.textContent : "").toLowerCase();
      row.dataset.filtered = judul.includes(keyword) ? "0" : "1";
    });
    currentPage = 1;  
    renderTable();
  }

  searchInput.addEventListener("input", function () {
    applySearch(this.value);
  });

  getAllRows().forEach(r => r.dataset.filtered = "0");
  renderTable();
});
</script>



