<?php
include_once("koneksi.php");
    $nama = $_POST['nama'];

    $query = mysqli_query($conetion, 'SELECT barang.nama, satuan.nama, kategori.nama FROM barang JOIN satuan ON satuan.id = barang.satuan.id JOIN kategori ON kategori.id = barang.kategori.id');
?>