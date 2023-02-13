<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN UKK</title>
    <link rel="stylesheet" href="datatampil.css">
    <link rel="icon" type="icon/x-icon" href="wallpaper2.png">
</head>
<body>
    <center><div class="header">
        <h1>بسم الله الرحمن الرحيم</h1>
            </div>
        <h3>DATA TOKO BANGUNAN</h3>
        <table border="2">
            <tr>
                <td>NAMA TOKO</td>
                <td>ALAMAT</td>
                <td>NO SIUP</td>
                <td>NAMA PEMILIK</td>
                <td>NAMA BAHAN</td>
                <td>SATUAN</td>   
                <td>HARGA</td>
                <td>AKSI</td>
</tr>

<?php
include("koneksi.php");
$query=mysqli_query($db,"SELECT * FROM tb_toko INNER JOIN tb_bahan ON tb_toko.id_bahan = tb_bahan.id_bahan");
while($row=mysqli_fetch_array($query)){
echo"<tr>";
    echo"<td>".$row['nama_toko']."</td>";
    echo"<td>".$row['alamat']."</td.>";
    echo"<td>".$row['no_siup']."</td>";
    echo"<td>".$row['nama_pemilik']."</td>";
    echo"<td>".$row['nama_bahan']."</td>";
    echo"<td>".$row['satuan']."</td>";
    echo"<td>".$row['harga']."</td>";
    echo"<td>";
    echo"<a href='editcuy.php?id_toko=".$row['id_toko']."'>Edit</a>|";
    echo"<a href='hapuscuy.php?id_toko=".$row['id_toko']."'>Hapus</a>|";
    echo"</td>";
    echo"</tr>";
}
?>
</table>
<p>
    <a href="tambahcuy.php"><input type="button" name="tambah" value="TAMBAH"></a>
    <a href="menucuy.php"><input type="button" name="menu" value="MENU"></a>
</p>
</center>
</body>
</html>