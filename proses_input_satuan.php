<?php
include_once("koneksi.php");
    $nama = $_POST['fname'];

    $query = mysqli_query($conetion, "insert into satuan (nama) values ('$nama') ");
?>