<?php 
include 'config/app.php';
// menerima id barang yang dipilih pengguna
$id_barang = (int)$_GET['id_barang'];

    if (delete_barang($id_barang) > 0) {

        header("Location:index.php?message=berhasil dihapus");

    }

