<?php
include 'koneksi.php';
$id=$_GET['id_mhs'];

$sql="DELETE FROM tbl_127 WHERE id_mhs=$id";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Delete data gagal";
}else{
    echo "Data mahasiswa berhasil di delete<br>";
    echo "<a href='data_mhs.php'> Show data</a>";
}

?>