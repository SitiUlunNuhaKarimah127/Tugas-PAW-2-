<?php
include "koneksi.php";
$id_mhs = $_POST['id_mhs'];
$nama_mhs = $_POST['nama_mhs'];
$nim_mhs = $_POST['nim_mhs'];
$alamat_mhs= $_POST['alamat_mhs'];

$sql = "UPDATE tbl_127 set nama_mhs = '$nama_mhs', nim_mhs='$nim_mhs', alamat_mhs='$alamat_mhs' where id_mhs='$id_mhs'";
$hasil =mysqli_query($koneksi, $sql);
if ($hasil){
    header('location:data_mhs.php');
}else{
    echo "Gagal masuk database<br>";
    echo "<a href= 'form_edit.php'>Show data</a>";
}

?>