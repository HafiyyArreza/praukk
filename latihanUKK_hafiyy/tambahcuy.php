<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH</title>
    <link rel="stylesheet" href="datatambah.css">
    <link rel="icon" type="icon/x-icon" href="wallpaper3.png">
</head>
<body>
<center><div class="batagor">
    <h1>بسم الله الرحمن الرحيم</h1>
</div>
    <h3>TAMBAH</h3>
    <form action ="prosestambahcuy.php" method="POST">
        <table border="2">    
            <tr>
                <td><label for="nama_toko">Nama Toko</label></td>
                <td><input type="type" name="nama_toko"></td>
</tr>
<tr>
                <td><label for="alamat">Alamat</label></td>
                <td><input type="type" name="alamat"></td>
</tr>
<tr>
                <td><label for="no_siup">No Siup</label></td>
                <td><input type="number" name="no_siup"></td>
</tr>
<tr>
                <td><label for="nama_pemilik">Nama Pemilik</label></td>
                <td><input type="type" name="nama_pemilik"></td>
</tr>
<tr>
                <td><label for="nama_bahan">Nama Bahan</label></td>
                <td><input type="type" name="nama_bahan"></td>
</tr>
<tr>
                <td><label for="satuan">Satuan</label></td>
                <td><input type="type" name="satuan"></td>
</tr>
<tr>
                <td><label for="harga">Harga</label></td>
                <td><input type="number" name="harga"></td>
               
</tr>
<td><input type="submit" value="tambah" name="TAMBAH"></td>
</table>
<a href ="tampilcuy.php"><input type="button" value="KEMBALI"></a>
</center>
</body>
</html>