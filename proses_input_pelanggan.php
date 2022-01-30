<?php
include_once("koneksi.php");
    $nama =$_POST['fname'];

    $query = mysqli_query($conection, "insert into pelanggan (nama) values ('$nama') ");
?>