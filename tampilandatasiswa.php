<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesiswa.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>SARPRAS</title>
</head>
<body>

    <!-- sidebar -->
    <div class="sidebar">
        <div class="header-sidebar">
            <h3 class="headertitle"> <a href="menu.html" style="color:#FFFFFF">SARPRAS</a></h3>
        </div>
        <div class="sidebar-content">
            <p class="p1"><a href="tampilandatasiswa.php" style="color:#FFFFFF">Data Siswa</a></p>
            <p class="p2"><a href="tampilandatabarang.php" style="color:#FFFFFF">Data Barang</a></p>
        </div>
    </div>

    <!-- table -->
    <div class="siswadata">
        <h2>DATA SISWA</h2>
        <button class="create"><a href="datasiswa.html" style="color:#0F2458">Create</a></button>
        <table class="datas">
            <tr>
                <th class="th1">No. Siswa</th>
                <th class="th2">Nama Siswa</th>
                <th class="th3">Kelas</th>
                <th class="th4">NIS</th>
                <th class="th5">Aksi</th>
            </tr>
            <?php
                $sql = "SELECT * FROM db_siswa";
                $query = mysqli_query($connect, $sql);
                while($pel = mysqli_fetch_array($query)){
                    echo "
                    <tr>
                    <td>$pel[No_Siswa]</td>
                    <td>$pel[Nama_Siswa]</td>
                    <td>$pel[Kelas]</td>
                    <td>$pel[NIS]</td>
                    <td>
                        <a href='formedit.php?No_Siswa=".$pel['No_Siswa']."' class =\"siswaedit\">Edit</a>
                        <a href='hapussiswa.php?No_Siswa=".$pel['No_Siswa']."' class =\"siswahapus\">Hapus</a>
                    </td>
                </tr>";

                }
            ?>
        </table>
    </div>
</body>
</html>