<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inventaris Barang PT Uwu</title>
    <style>
        body {
            font-family: Helvetica
        }

        table {
            border-collapse: collapse
        }

        th,
        td {
            font-size: 13px;
            border: 1px solid #DEDEDE;
            padding: 3px 5px;
            color: #303070
        }

        th {
            background: #00ffff;
            font-size: 12px;
            border-color: #B0B0B0
        }
    </style>
</head>

<body>
    <center>
        <font face="bahnschrift">
            <h1>INVENTARIS BARANG PT UWU</h1>
        </font>
    </center>
    <center>
        <font face="bahnschrift">
            <h3>by Alfan Maulana</h3>
        </font>
    </center>
    <font face="bahnschrift">
        <h3>Supplier</h3>
    </font>

    <?php
    include_once('koneksi.php');
    if (isset($_POST['submit'])) {

        $id = $_POST['id_supplier'];
        $no = $_POST['no_telp'];
        $alamat = $_POST['alamat'];

        $sql = 'INSERT INTO supplier (id_supplier, no_telp, alamat)';
        $sql = "VALUE ('$id','$no','$alamat')";
        $result = mysqli_query($koneksi, $sql);

        header('location: index.php');
        echo "Data Berhasil Ditambahkan .<a href='index.php'>View Items</a>";
    }
    ?>

    <a href="index.php">Kembali</a>
    <font face="bahnschrift">
        <h3>Tambah Data Supplier</h3>
    </font>

    <form action="tambah.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>ID_Supplier</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>No_Telp</td>
                <td><input type="text" name="no"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <td></td>
            <td><input type="submit" name="submit" value="Tambah"></td>
            </tr>
        </table>


    </form>
</body>

</html>