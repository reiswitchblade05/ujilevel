<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylebarang.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>SARPRAS</title>
</head>
<body>

    <!-- sidebar -->
    <div class="sidebar">
        <div class="header-sidebar">
            <h3 class="title">SARPRAS</h3>
        </div>
        <div class="sidebar-content">
            <p class="p1"><a href="tampilandatasiswa.php" style="color:#FFFFFF">Data Siswa</a></p>
            <p class="p2"><a href="tampilandatabarang.php" style="color:#FFFFFF">Data Barang</a></p>
        </div>
    </div>

    <!-- table -->
    <div class="barangdata">
        <h2>DATA BARANG</h2>
        <button class="create"><a href="databarang.html" style="color:#0F2458">Create</a></button>
        <table class="datab">
            <tr>
                <th class="thb1">Kode Barang</th>
                <th class="thb2">Nama Barang</th>
                <th class="thb3">Nama Peminjam</th>
                <th class="thb4">Tanggal Peminjaman</th>
                <th class="thb5">Status Barang</th>
                <th class="thb6">Aksi</th>
            </tr>
            <?php
                $sql = "SELECT * FROM db_barang";
                $query = mysqli_query($connect, $sql);
                while($pel = mysqli_fetch_array($query)){
                    echo "
                    <tr>
                    <td>$pel[Kode_Barang]</td>
                    <td>$pel[Nama_Barang]</td>
                    <td>$pel[Nama_Peminjam]</td>
                    <td>$pel[Tanggal_Peminjaman]</td>
                    <td>$pel[Status_Barang]</td>
                    <td>
                        <a href='formeditbarang.php?Kode_Barang=".$pel['Kode_Barang']."' class =\"barangedit\">Edit</a>
                        <a href='hapusbarang.php?Kode_Barang=".$pel['Kode_Barang']."' class =\"baranghapus\">Hapus</a>
                    </td>
                </tr>";

                }
            ?>
        </table>
    </div>
</body>
</html>