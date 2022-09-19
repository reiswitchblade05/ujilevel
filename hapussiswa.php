<?php
    include 'koneksi.php';

    $No_Siswa = $_GET['No_Siswa'];

    $sql = "DELETE FROM `db_siswa` WHERE db_siswa.No_Siswa = '$No_Siswa'";

    $query = mysqli_query($connect, $sql);
        
    if($query){
        header('Location: tampilandatasiswa.php');
    }else{
        header('Location: tampilandatasiswa.php?status=gagal');
    }

?>