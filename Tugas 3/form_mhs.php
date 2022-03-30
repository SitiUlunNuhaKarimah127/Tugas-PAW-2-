<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="x-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-widht, initial-scale=1.0">
    <title>Form Tabel Mahasiswa</title>
</head>

<body>

    <h1 style="text-align: center;">Form Tambah Mahasiswa</h1>
    <form method="POST" action="action.php">
        <table>
            <tr>
                <td>Nama Mahasiswa :</td>
                <td><input class="form-control" type="text" name="nama_mhs"></td><br />
            </tr>
            <tr>
                <td>NIM Mahasiswa : </td>
                <td><input class="form-control" type="text" name="nim_mhs"></td><br />
            </tr>
            <tr>
                <td>Alamat Mahasiswa : </td>
                <td><input class="form-control" type="text" name="alamat_mhs"></td><br />
            </tr>
            <tr>
                <td><button class="btn btn-success" type="submit" name="kirim">Kirim</button></td>
            </tr>
    </form>
    </table>
</body>

</html>