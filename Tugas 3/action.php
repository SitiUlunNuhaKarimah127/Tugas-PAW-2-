<?php
include "koneksi.php";

$nama_mhs = $_POST['nama_mhs'];
$nim_mhs = $_POST['nim_mhs'];
$alamat_mhs = $_POST['alamat_mhs'];

$sql = "INSERT INTO tbl_127 VALUES('', '$nama_mhs', '$nim_mhs','$alamat_mhs')";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Eksekusi tambah data mahasiswa gagal";
}else{
    echo "Eksekusi tambah data mahasiswa berhasil<br>";
    echo "<a href= 'data_mhs.php'>Show data</a>";
}

?>