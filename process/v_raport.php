<?php 
include "../config/koneksi.php";
$id=$_POST['id'];
$query="UPDATE tb_registrasi SET v_raport='1' WHERE id='$id'";
mysqli_query($konek, $query);
header('location:../panel/admin/index.php?page=validasi');
?>
