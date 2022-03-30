<?php
include "koneksi.php";
$id_mhs = $_POST['id'];
$nama_mhs = $_POST['nama_mhs'];
$nim_mhs = $_POST['nim_mhs'];
$alamat_mhs= $_POST['alamat_mhs'];

$sql = "UPDATE tbl_mhs set nama_mhs = '$nama', nim_mhs='$nim', alamat_mhs='$alamat' where id_mhs=$id)";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Eksekusi update data mahasiswa gagal";
}else{
    echo "Eksekusi update data mahasiswa berhasil<br>";
    echo "<a href= 'data_mhs.php'>Show data</a>";
}

?>