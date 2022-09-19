<?php
    include 'koneksi.php';

    $Kode_Barang = $_GET['Kode_Barang'];
    $sql = "SELECT * FROM db_barang WHERE Kode_Barang='$Kode_Barang'";
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
        <form action="editbarang.php" method="post">
            <h3>Tambah Data Barang</h3>
            <p><label><input value="<?php echo $pel['Kode_Barang']?>" required="required" 
            type="hidden" name="Kode_Barang"></label></p>
            <p><label>Nama Barang : <input value="<?php echo $pel['Nama_Barang']?>" required="required" 
            type="text" name="Nama_Barang"></label></p>
            <p><label>Nama Peminjam : <input value="<?php echo $pel['Nama_Peminjam']?>" required="required" type="text" 
            name="Nama_Peminjam"></label></p>
            <p><label>Tanggal Peminjaman : <input value="<?php echo $pel['Tanggal_Peminjaman']?>" required="required" type="text" 
            name="Tanggal_Peminjaman"></label></p>
            <p><label>Status Barang : <input value="<?php echo $pel['Status_Barang']?>" required="required" type="text" 
            name="Status_Barang"></label></p>
            <input type="submit" name="update" value="update">
        </form>
    </div>
</body>
</html>