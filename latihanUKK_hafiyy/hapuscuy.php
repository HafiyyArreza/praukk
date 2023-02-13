<?php
include("koneksi.php");

$id_toko=$_GET['id_toko'];

$sql="DELETE FROM tb_bahan where id_bahan='$id_toko'";
$query=mysqli_query($db,$sql);

$sql="DELETE FROM tb_toko where id_toko='$id_toko'";
$query=mysqli_query($db,$sql);

if($query){
    header("Location:tampilcuy.php?status=sukses");
}else{
    die("akses dilarang");
}

?>