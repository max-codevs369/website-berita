<?php 
include '../koneksi.php';

if(isset($_POST['submit'])){
    $nisn = $_POST['nisn'];
    $namaPenulis = $_POST['namaPenulis'];

    $kodePenulis = ''; 
    $koneksi->query("INSERT INTO penulis (kodePenulis, nisn, namaPenulis) VALUES('$kodePenulis','$nisn','$namaPenulis')");

    echo "<script>
        alert('Data Penulis Telah Ditambah');
        window.location.href='?page=admin/penulis1';
    </script>";
}
?>
