<?php
    include 'koneksi.php';

    $No_Siswa = $_GET['No_Siswa'];
    $sql = "SELECT * FROM db_siswa WHERE No_Siswa='$No_Siswa'";
    $query = mysqli_query($connect, $sql);
    $pel = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1){
        die ("data tidak ditemukan");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <title>Edit Data</title>
</head>
<body>
    <div class="sidebar">
        <div class="header-sidebar">
            <h3 class="title">SARPRAS</h3>
        </div>
        <div class="sidebar-content">
            <p class="p1"><a href="tampilandatasiswa.php" style="color:#FFFFFF">Data Siswa</a></p>
            <p><a href="tampilandatabarang.php" style="color:#FFFFFF">Data Barang</a></p>
        </div>
    </div>

    <div class="edit">
        <form action="edit.php" method="post">
            <h3>Tambah Data Siswa</h3>
            <table class="tableeditsiswa">
                <tr>
                    <p><label> <input value="<?php echo $pel['No_Siswa']?>" required="required" 
                    type="hidden" name="No_Siswa"></label></p>
                </tr>
                <tr>
                    <td>Nama Siswa</td>
                    <td><input value="<?php echo $pel['Nama_Siswa']?>" required="required" 
                    type="text" name="Nama_Siswa"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td<input value="<?php echo $pel['Kelas']?>" required="required" type="text" 
                    name="Kelas"></td>
                </tr>
                <tr>
                    <td>NIS</td>
                    <td><input value="<?php echo $pel['NIS']?>" required="required" type="number" 
                    name="NIS"></td>
                </tr>
            </table>
            <input type="submit" name="update" value="update">
        </form>
    </div>
</body>
</html>