<?php
$nama=$_POST['nama'];
$sandi=$_POST['sandi'];
include "sambung.php";
$query = mysqli_query($link,"select * from login where id_login='1'");
$jmlh=mysqli_fetch_array($query);
if(($nama=="Admin")&&($sandi==$jmlh[1]))
{
	echo "<script language=\"Javascript\">\n
	window.alert('Login Berhasil');
	</script>";
	include"menu.php";
	exit(0);
}
if(($nama=="Admin")&&($sandi!=$jmlh[1]))
{
	echo "<script language=\"Javascript\">\n
	window.alert('Login Gagal');
	</script>";
	include"home.php";
	exit(0);
}
?>