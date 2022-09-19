<?php
    include "koneksi.php";

    if(isset($_POST['update'])){
        $No_Siswa = $_POST['No_Siswa'];
        $Nama_Siswa = $_POST['Nama_Siswa'];
        $Kelas = $_POST['Kelas'];
        $NIS = $_POST['NIS'];

        $sql = "UPDATE db_siswa SET Nama_Siswa = '$Nama_Siswa', Kelas = '$Kelas',
        NIS = '$NIS' WHERE db_siswa.No_Siswa = '$No_Siswa'";

        $query = mysqli_query($connect, $sql);
        
        if($query){
            header('Location: tampilandatasiswa.php');
        }else{
            header('Location: simpandatasiswa.php?status=gagal');
        }
    }

?>