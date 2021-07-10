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
    if (isset($_POST['supplier'])) {
        $koneksi->query("UPDATE supplier SET id_supplier='" . $_POST['no_telp'] . "', alamat='" . $_POST['alamat'] . "' WHERE id_supplier='" . $_POST['id_supplier'] . "'");
        header('location: index.php');
    }
    ?>
    <?php
    // Display selected user data based on id
    // Getting id from url
    $id = $_GET['id_supplier'];

    // Fetech user data based on id
    $result = mysqli_query($koneksi, "SELECT * FROM supplier WHERE id_supplier= $id");

    while ($user_data = mysqli_fetch_array($result)) {
        $id = $user_data['id_supplier'];
        $no = $user_data['no_telp'];
        $alamat = $user_data['alamat'];
    }
    ?>
    <html>

    <head>
        <title>Edit Data Supplier</title>
    </head>

    <body>
        <a href="index.php">Beranda</a>
        <br /><br />

        <form name="supplier" met hod="post" action="ubah.php">
            <table border="0">
                <tr>
                    <td>ID Supplier</td>
                    <td><input type="text" name="id_supplier" value=<?php echo $id; ?>></td>
                </tr>
                <tr>
                    <td>No Telepon</td>
                    <td><input type="text" name="no_telp" value=<?php echo $no; ?>></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value=<?php echo $alamat; ?>></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id_supplier" value=<?php echo $_GET['id_supplier']; ?>></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>

    </html>