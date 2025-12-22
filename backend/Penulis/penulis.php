<?php
include("../koneksi.php");

$kodePenulis = $_SESSION['kodePenulis'] ?? null;

if (!$kodePenulis) {
    die("Data penulis tidak ditemukan. Silahkan login ulang.");
}

$query = $koneksi->prepare("SELECT * FROM penulis WHERE kodePenulis = ?");
$query->bind_param("i", $kodePenulis);
$query->execute();
$result = $query->get_result();
$data = $result->fetch_assoc();

if (!$data) {
    die("Data penulis tidak ditemukan.");
}

if (isset($_POST['edit'])) {
    $namaPenulis = $_POST['namaPenulis'];

    $update = $koneksi->prepare("UPDATE penulis SET namaPenulis = ? WHERE kodePenulis = ?");
    $update->bind_param("si", $namaPenulis, $kodePenulis);
    if ($update->execute()) {
        echo "<script>
                alert('Profil berhasil diubah!');
                window.location='?page=Penulis/penulis';
            </script>";
    } else {
        echo "<script>alert('Gagal mengubah profil');</script>";
    }
}
?>

<div class="card">
    <div class="card-body">
        <form action="" method="POST">
            <h3 class="mb-4">Edit Profil</h3>
            <div class="form-group">
                <label for="">NISN</label>
                <input type="text" class="form-control" name="nisn" value="<?= htmlspecialchars($data['nisn']); ?>" readonly><br>
            </div>
            <div class="form-group">
                <label for="">Nama Penulis</label>
                <input type="text" id="namaPenulis" name="namaPenulis" class="form-control" value="<?= htmlspecialchars($data['namaPenulis']); ?>" required>
            </div>
            <button class="btn btn-primary" name="edit" type="submit">Edit Profil</button>
        </form>
    </div>
</div>
