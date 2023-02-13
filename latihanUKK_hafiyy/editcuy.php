<?php
include("koneksi.php");
if(!isset($_GET['id_toko'])){
    header("location:tampilcuy.php");
}

$id_toko=$_GET['id_toko'];
$sql="SELECT * FROM tb_toko INNER JOIN tb_bahan ON tb_toko.id_bahan = tb_bahan.id_bahan
WHERE tb_toko.id_toko='$id_toko'";
$query=mysqli_query($db,$sql);
$tb_toko=mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
    <link rel="stylesheet" href="dataedit.css">
    <link rel="icon" type="icon/x-icon" href="wallpaper4.png">
</head>
<body>
    <center><div class="cilok">
        <h1>بسم الله الرحمن الرحيم</h1>
</div>
        <h3>EDIT DATA</h3>
        <form action ="proseseditcuy.php" method="POST">
            <tr>
                <td><input type="hidden" name="id_toko" value="<?php echo $tb_toko['id_toko']?>" /></td>
</tr>
            <table border = "2">
                
                <tr>
                    <td><label for="nama_toko">Nama Toko</label></td>
                    <td><input type="text" name="nama_toko" value="<?php echo $tb_toko['nama_toko']?>" /></td>
</tr>
<tr>
                    <td><label for="alamat">Alamat</label></td>
                    <td><input type="text" name="alamat" value="<?php echo $tb_toko['alamat']?>" /></td>
</tr>
<tr>
                    <td><label for="no_siup">No Siup</label></td>
                    <td><input type="number" name="no_siup" value="<?php echo $tb_toko['no_siup']?>" /></td>
</tr>
<tr>
                    <td><label for="nama_pemilik">Nama Pemilik</label></td>
                    <td><input type="text" name="nama_pemilik" value="<?php echo $tb_toko['nama_pemilik']?>" /></td>
</tr>
<tr>
                    <td><label for="nama_bahan">Nama Bahan</label></td>
                    <td><input type="text" name="nama_bahan" value="<?php echo $tb_toko['nama_bahan']?>" /></td>
</tr>
<tr>
                    <td><label for="satuan">Satuan</label></td>
                    <td><input type="text" name="satuan" value="<?php echo $tb_toko['satuan']?>" /></td>
</tr>
<tr>
                    <td><label for="harga">Harga</label></td>
                    <td><input type="number" name="harga" value="<?php echo $tb_toko['harga']?>" /></td>
</tr>
<td><input type="submit" value="edit" name="edit"></td>
</table>
<a href ="tampilcuy.php"><input type="button" value="KEMBALI"></a>
</body>
</html>