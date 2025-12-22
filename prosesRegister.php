<?php
include "koneksi.php";

$nisn  = $_POST['nisn'];
$nama  = $_POST['nama'];
$pass  = $_POST['pass'];
$level = $_POST['level'];


$sql = "SELECT * FROM user1 WHERE nisn = '$nisn' AND pass = '$pass' AND level = '$level'";
$sql1 = "SELECT * FROM user1 WHERE nisn = '$nisn' AND pass = '$pass'";
$sql2 = "SELECT * FROM user1 WHERE nisn = '$nisn' AND level = '$level'";

$query = $koneksi->query($sql);
$query1 = $koneksi->query($sql1);
$query2 = $koneksi->query($sql2);

	
if($query->num_rows > 0 || $query1->num_rows > 0) {
    echo "<div align='center'>Masukkan Kata Sandi Yang Lebih Kuat! <a href='register.php'>Back</a></div>";
} elseif($query2->num_rows > 0){
	$row = $query2->fetch_assoc();
	if($row['level'] == $level){
		echo "<div align='center'>NISN ini sudah terdaftar sebagai <b>".$row['level']."</b>, silakan <a href='login.php'>Login</a></div>";
		exit;
	}
} else {
    if(!$nama || !$pass) {
        echo "<div align='center'>Masih ada data kosong! <a href='register.php'>Back</a></div>";
    } else {
        $sql="INSERT INTO `user1` (`nisn`,`nama`,`pass`,`level`) VALUES('$nisn','$nama','$pass','$level')";
        $simpan = $koneksi->query($sql);

        if($simpan) {
            if ($level === 'penulis') {
                $sqlPenulis = "INSERT INTO penulis (nisn, namaPenulis) VALUES (?, ?)";
                $stmtPenulis = $koneksi->prepare($sqlPenulis);
                $stmtPenulis->bind_param("ss", $nisn, $nama);
                $stmtPenulis->execute();
            }

            echo "<div align='center'>Pendaftaran sukses, silakan <a href='login.php'>Login</a></div>";
        } else {
            echo "<div align='center'>Proses gagal!</div>";
        }
    }
}
?>



