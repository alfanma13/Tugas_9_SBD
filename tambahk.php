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
        <h3>Karyawan</h3>
    </font>
    <table>

        <?php
        include_once('koneksi.php');
        if (isset($_POST['submit'])) {

            $idk = $_POST['id_karyawan'];
            $nama = $_POST['nama_karyawan'];
            $bagian = $_POST['bagian'];
            $extension = $_post['extension'];

            $sql = 'INSERT INTO karyawan (id_karyawan, nama_karyawan, bagian, extension)';
            $sql .= "VALUE ('{$idk}', '{$nama}', '{$bagian}','{$extension})";
            $result = mysqli_query($koneksi, $sql);

            header('location: index.php');
            echo "Data Berhasil Ditambahkan .<a href='index.php'>View Items</a>";
        }
        ?>

        <a href="index.php">Kembali</a>
        <font face="bahnschrift">
            <h3>Tambah Data Karyawan</h3>
        </font>

        <form action="add.php" method="post">
            <table width="25%" border="0">
                <tr>
                    <td>ID_Karyawan</td>
                    <td><input type="text" name="idk"></td>
                </tr>
                <tr>
                    <td>Nama_Karyawan</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Bagian</td>
                    <td><input type="text" name="bagian"></td>
                </tr>
                <tr>
                    <td>Extension</td>
                    <td><input type="text" name="extension"></td>
                </tr>

                <td><input type="submit" name="submit" value="Add"></td>
                </tr>
            </table>
        </form>
</body>

</html>