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
    // include database connection file
    include "koneksi.php";

    // Check if form is submitted for user update, then redirect to homepage after update
    if (isset($_POST['karyawan'])) {
        $koneksi->query("UPDATE karyawan SET id_karyawan='" . $_POST['nama_karyawan'] . "', bagian='" . $_POST['bagian'] . "', extension='" . $_POST['extension'] . "' WHERE id_karyawan='" . $_POST['id_karyawan'] . "'");
        header('location: index.php');
    }
    ?>
    <?php
    // Display selected user data based on id
    // Getting id from url
    $idk = $_GET['id_karyawan'];

    // Fetech user data based on id
    $result = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE id_karyawan= $idk");

    while ($user_data = mysqli_fetch_array($result)) {
        $idk = $user_data['id_karyawan'];
        $nama = $user_data['nama_karyawan'];
        $bagian = $user_data['bagian'];
        $extension = $user_data['extension'];
    }
    ?>
    <html>

    <head>
        <title>Edit Data Karyawan</title>
    </head>

    <body>
        <a href="index.php">Beranda</a>
        <br /><br />

        <form name="karyawan" met hod="post" action="ubahk.php">
            <table border="0">
                <tr>
                    <td>ID Karyawan</td>
                    <td><input type="text" name="id_karyawan" value=<?php echo $idk; ?>></td>
                </tr>
                <tr>
                    <td>Nama Karyawan</td>
                    <td><input type="text" name="nama_karyawan" value=<?php echo $nama; ?>></td>
                </tr>
                <tr>
                    <td>Bagian</td>
                    <td><input type="text" name="bagian" value=<?php echo $bagian; ?>></td>
                </tr>
                <tr>
                    <td>Extension</td>
                    <td><input type="text" name="extension" value=<?php echo $extension; ?>></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id_karyawan" value=<?php echo $_GET['id_karyawan']; ?>></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>

    </html>