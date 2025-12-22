<?php
include("../koneksi.php");

$kodePenulis = $_GET['kodePenulis'] ?? null;
if(!$kodePenulis){
    echo "<script>alert('Kode Penulis tidak ditemukan'); window.location='?page=admin/penulis1';</script>";
    exit;
}

$stmt = $koneksi->prepare("SELECT * FROM penulis WHERE kodePenulis=?");
$stmt->bind_param("s", $kodePenulis);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();
$stmt->close();

if(!$data){
    echo "<script>alert('Data penulis tidak ditemukan'); window.location='?page=admin/penulis1';</script>";
    exit;
}

if(isset($_POST['edit'])){
    $namaPenulis = trim($_POST['namaPenulis']);

    if(empty($namaPenulis)){
        echo "<script>alert('Nama penulis tidak boleh kosong');</script>";
    } else {
        $stmt = $koneksi->prepare("UPDATE penulis SET namaPenulis=? WHERE kodePenulis=?");
        $stmt->bind_param("ss", $namaPenulis, $kodePenulis);
        if($stmt->execute()){
            echo "<script>
                alert('Data berhasil diubah');
                window.location='?page=admin/penulis1';
            </script>";
        } else {
            echo "<script>alert('Gagal mengubah data');</script>";
        }
        $stmt->close();
    }
}
?>

<div class="row mb-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Penulis</h3>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group mb-3">
                        <label for="nisn">NISN</label>
                        <input type="text" class="form-control" name="nisn" value="<?= htmlspecialchars($data['nisn']); ?>" readonly>
                    </div>
                    <div class="form-group mb-3">
                        <label for="namaPenulis">Nama Penulis</label>
                        <input type="text" id="namaPenulis" name="namaPenulis" class="form-control" value="<?= htmlspecialchars($data['namaPenulis']); ?>" required>
                    </div>
                    <button class="btn btn-primary mt-2" name="edit" type="submit">Edit Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
