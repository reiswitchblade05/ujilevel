<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        $No_Siswa = $_POST['No_Siswa'];
        $Nama_Siswa = $_POST['Nama_Siswa'];
        $Kelas = $_POST['Kelas'];
        $NIS = $_POST['NIS'];

        $sql = "INSERT INTO db_siswa(No_Siswa, Nama_Siswa, Kelas, NIS) 
        VALUES('$No_Siswa','$Nama_Siswa','$Kelas','$NIS')";

        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location: tampilandatasiswa.php');
        }else{
            header('Location: simpandatasiswa.php?status=gagal');
        }
    }
?>