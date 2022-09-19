<?php
    include "koneksi.php";

    if(isset($_POST['update'])){
        $Kode_Barang = $_POST['Kode_Barang'];
        $Nama_Barang = $_POST['Nama_Barang'];
        $Nama_Peminjam = $_POST['Nama_Peminjam'];
        $Tanggal_Peminjaman = $_POST['Tanggal_Peminjaman'];
        $Status_Barang = $_POST['Status_Barang'];

        $sql = "UPDATE db_barang SET Nama_Barang = '$Nama_Barang',
        Nama_Peminjam = '$Nama_Peminjam', Tanggal_Peminjaman = '$Tanggal_Peminjaman', Status_Barang = '$Status_Barang' WHERE db_barang.Kode_Barang = '$Kode_Barang'";

        $query = mysqli_query($connect, $sql);
        
        if($query){
            header('Location: tampilandatabarang.php');
        }else{
            header('Location: simpandatabarang.php?status=gagal');
        }
    }

?>