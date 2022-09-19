<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        $Kode_Barang = $_POST['Kode_Barang'];
        $Nama_Barang = $_POST['Nama_Barang'];
        $Nama_Peminjam = $_POST['Nama_Peminjam'];
        $Tanggal_Peminjaman = $_POST['Tanggal_Peminjaman'];
        $Status_Barang = $_POST['Status_Barang'];

        $sql = "INSERT INTO db_barang(Kode_Barang, Nama_Barang, Nama_Peminjam, Tanggal_Peminjaman, Status_Barang) 
        VALUES('$Kode_Barang','$Nama_Barang','$Nama_Peminjam','$Tanggal_Peminjaman','$Status_Barang')";

        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location: tampilandatabarang.php');
        }else{
            header('Location: simpandatabarang.php?status=gagal');
        }
    }
?>