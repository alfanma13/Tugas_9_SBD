<html>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
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
        <a href="tambah.php">[+] Data Supplier</a>
    </font>

    <table>
        <thead>
            <tr>
                <th>ID Supplier</th>
                <th>No Telepon</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <?php
        include 'koneksi.php';
        $sql = 'SELECT  * FROM supplier';
        $query = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <tbody>
                <tr>
                    <td><?php echo $row['id_supplier'] ?></td>
                    <td><?php echo $row['no_telp'] ?></td>
                    <td><?php echo $row['alamat'] ?></td>

                    <td>
                        <a href="ubah.php?id_supplier=<?= $row['id_supplier']; ?>">Ubah</a>
                        <a href="hapus.php?id_supplier=<?= $row['id_supplier']; ?>">Hapus</a>
                    </td>
                </tr>
            </tbody>
        <?php
        }
        ?>
    </table>

    <font face="bahnschrift">
        <h3>Karyawan</h3>
        <a href="tambahk.php">[+] Data Karyawan</a>
    </font>
    <table>
        <thead>
            <tr>
                <th>ID Karyawan</th>
                <th>Nama Karyawan</th>
                <th>Bagian</th>
                <th>Extension</th>
            </tr>
        </thead>
        <?php
        $sql = 'SELECT * FROM karyawan';
        $query = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <tbody>
                <tr>
                    <td><?php echo $row[0] ?></td>
                    <td><?php echo $row[1] ?></td>
                    <td><?php echo $row[2] ?></td>
                    <td><?php echo $row[3] ?></td>

                    <td>
                        <a href="ubahk.php?id_karyawan=<?= $row['id_karyawan']; ?>">Ubah</a>
                        <a href="hapus.php?id_karyawan=<?= $row['id_karyawan']; ?>">Hapus</a>
                    </td>
                </tr>
            </tbody>
        <?php
        }
        ?>
    </table>

    <font face="bahnschrift">
        <h3>Transaksi</h3>
        <a href="tambaht.php">[+] Data Transaksi</a>
    </font>

    <table>
        <thead>
            <tr>
                <th>Id Transaksi</th>
                <th>Id Material</th>
                <th>Id Karyawan</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <?php
        $sql = 'SELECT * FROM transaksi';
        $query = mysqli_query($koneksi, $sql);
        while ($rs = mysqli_fetch_array($query)) {
        ?>
            <tbody>
                <tr>
                    <td><?php echo $rs['id_transaksi'] ?></td>
                    <td><?php echo $rs['id_material'] ?></td>
                    <td><?php echo $rs['id_karyawan'] ?></td>
                    <td><?php echo $rs['tanggal'] ?></td>
                    <td><?php echo $rs['keterangan'] ?></td>

                    <td>
                        <a href="ubah.php?id_transaksi=<?= $row['id_transaksi']; ?>">Ubah</a>
                        <a href="hapus.php?id_transaksi=<?= $row['id_transaksi']; ?>">Hapus</a>
                    </td>
                </tr>
            </tbody>
        <?php
        }
        ?>
    </table>

    <font face="bahnschrift">
        <h3>Material PT</h3>
        <a href="tambahmpt.php">[+] Data Material PT</a>
    </font>
    <table>
        <thead>
            <tr>
                <th>Id Material</th>
                <th>Nama Material</th>
                <th>Stok</th>
                <th>Id Supplier</th>
            </tr>
        </thead>
        <?php
        $sql = 'SELECT * FROM material_pt';
        $query = mysqli_query($koneksi, $sql);
        while ($rs = mysqli_fetch_array($query)) {
        ?>
            <tbody>
                <tr>
                    <td><?php echo $rs['id_material'] ?></td>
                    <td><?php echo $rs['nama_material'] ?></td>
                    <td><?php echo $rs['stok'] ?></td>
                    <td><?php echo $rs['id_supplier'] ?></td>

                    <td>
                        <a href="ubah.php?id_material=<?= $row['id_material']; ?>">Ubah</a>
                        <a href="hapus.php?id_material=<?= $row['id_material']; ?>">Hapus</a>
                    </td>
                </tr>
            </tbody>
        <?php
        }
        ?>
    </table>

</body>

</html>