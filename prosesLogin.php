<?php
include "koneksi.php";
session_start();

$nisn = $_POST['nisn'] ?? '';
$pass = $_POST['pass'] ?? '';

$sql = "SELECT * FROM user1 WHERE nisn = ? AND pass = ?";
$stmt = $koneksi->prepare($sql);
$stmt->bind_param("ss", $nisn, $pass);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    $_SESSION['id']    = $user['id'];    
    $_SESSION['nisn']  = $user['nisn'];
    $_SESSION['nama']  = $user['nama'];
    $_SESSION['level'] = $user['level'];

    if ($user['level'] === 'penulis') {
        $stmt2 = $koneksi->prepare("SELECT kodePenulis FROM penulis WHERE nisn = ? LIMIT 1");
        $stmt2->bind_param("s", $user['nisn']);
        $stmt2->execute();
        $res = $stmt2->get_result();
        $penulis = $res->fetch_assoc();
        $_SESSION['kodePenulis'] = $penulis['kodePenulis'] ?? null;
    }

    if ($user['level'] === 'admin') {
        header("Location: backend/home.php");
    } elseif ($user['level'] === 'penulis') {
        header("Location: backend/dashboardPenulis.php");
    } elseif ($user['level'] == 'siswa') {
        header("Location: index.php");
    }else{
        echo "<div align='center'>Level tidak dikenali! <br>";
        echo "<a href='register.php'>Silahkan Registrasi Ulang!</a></div>";
    }
    exit;
} else {
    echo "<div align='center'>Login gagal! NISN atau password salah.<br>";
    echo "<a href='login.php'>Coba lagi</a></div>";
}
?>

