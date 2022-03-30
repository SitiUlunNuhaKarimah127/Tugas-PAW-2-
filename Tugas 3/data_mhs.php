<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <h1 style="text-align: center;">Data Mahasiswa</h1>
    <a href="form_mhs.php"><button class="btn btn-primary">Tambah</button></a>
    <table class="table table-sm" width="90%" border="1" cellspacing="1">
        <tr class="table-danger">
            <th>Id Mhs</th>
            <th>Nama Mahasiswa</th>
            <th>NIM Mahasiswa</th>
            <th>Alamat Mahasiswa</th>
            <th cosplan="2">Action</th>
        </tr>


            <?php

            include "koneksi.php";

            $sql="SELECT * FROM tbl_127";
            $hasil = mysqli_query($koneksi, $sql);
            while($row = mysqli_fetch_array($hasil)){
            ?>
            <tr class="table-success">
                <td><?=$row['id_mhs'];?></td>
                <td><?=$row['nama_mhs'];?></td>
                <td><?=$row['nim_mhs'];?></td>
                <td><?=$row['alamat_mhs'];?></td>
                <td><a href="form_edit.php?id_mhs=<?=$row['id_mhs']?>"> Edit
                <a href="delete.php?id_mhs=<?=$row['id_mhs']?>"> Delete</td>
            </tr>
            <?php }
             ?>
    </table>
</body>
</html>