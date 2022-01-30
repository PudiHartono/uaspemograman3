<?php
include_once("koneksi.php");
    $nama = $_POST['fname'];

    // $query = mysqli_query($conetion, "insert into barang (nama) values ('$nama') ");
    $query = mysqli_query($conetion, " INSERT INTO `barang`(`nama`) VALUES ('$nama')");
?>