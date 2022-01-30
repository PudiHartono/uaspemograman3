<?php
include_once("koneksi.php");
    $nama = $_POST['fname'];

    $query = mysqli_query($conetion,"insert into transaksi (nama_transaksi) values ('$nama_transaksi')");
?>