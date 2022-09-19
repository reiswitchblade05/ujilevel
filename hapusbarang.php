<?php
    include 'koneksi.php';

    $Kode_Barang = $_GET['Kode_Barang'];

    $sql = "DELETE FROM `db_barang` WHERE db_barang.Kode_Barang = '$Kode_Barang'";

    $query = mysqli_query($connect, $sql);
        
    if($query){
        header('Location: tampilandatabarang.php');
    }else{
        header('Location: tampilandatabarang.php?status=gagal');
    }

?>