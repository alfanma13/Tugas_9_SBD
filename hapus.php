<?php
    include 'koneksi.php';
    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM supplier WHERE id_supplier = '{$id}'");
    $result = mysqli_query($conn, "DELETE FROM karyawan WHERE id_karyawan = '{$id}'");
    $result = mysqli_query($conn, "DELETE FROM transaksi WHERE id_transaksi = '{$id}'");
    $result = mysqli_query($conn, "DELETE FROM material_pt WHERE id_material = '{$id}'");

    header('location: index.php');
