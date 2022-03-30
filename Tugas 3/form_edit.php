<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-widht, initial-scale=1.0">
    <title>Form Tabel Mahasiswa</title>
    
</head>
<body>
<?php
 include 'koneksi.php';
$id_mhs=$_GET['id_mhs'];
$sql="SELECT * FROM tbl_127 WHERE id_mhs=$id_mhs";
$hasil = mysqli_query($koneksi, $sql);
while($row = mysqli_fetch_array($hasil)){
?>


    <form method="post" action="update.php">
        <input type="hidden" name="id_mhs" value="<?php echo $row['id_mhs'];?>">
        Nama Mahasiswa : <input type="text" name="nama_mhs" value="<?php echo $row['nama_mhs'];?>"><br/>
        NIM Mahasiswa : <input type="text" name="nim_mhs" value="<?php echo $row['nim_mhs'];?>"><br/>
        Alamat Mahasiswa : <input type="text" name="alamat_mhs" value="<?php echo $row['alamat_mhs'];?>"><br/>
        <button type="submit">Update</button>
    </form>
    <?php
}
?>
</body>
</html>