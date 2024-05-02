<style>
.ganti{
  padding:5px 15px;
  background-image: url("images/ganti.png");
  background-size: 30px;
  background-position: 0px 0px;
  background-repeat: no-repeat;
}
.simpan{
  padding:5px 32px;
  background-image: url("images/simpan.png");
  background-size: 30px;
  background-position: 16px 0px;
  background-repeat: no-repeat;
}
.hapus{
  padding:5px 15px;
  background-image: url("images/hapus.png");
  background-size: 30px;
  background-position: 0px 0px;
  background-repeat: no-repeat;
}
.cetak{
  padding:5px 15px;
  background-image: url("images/cetak.png");
  background-size: 30px;
  background-position: 0px 0px;
  background-repeat: no-repeat;
}
.cari{
  padding:5px 15px;
  background-image: url("images/cari.png");
  background-size: 30px;
  background-position: 0px 0px;
  background-repeat: no-repeat;
}
a{
	text-decoration:none;
	color:blue;
	}
</style>
<?Php
error_reporting(0);
if($_POST['ok']==' ')
{
$a=$_POST['id_kontak'];
$b=$_POST['id_unit'];
$c=$_POST['nama'];
$d=$_POST['alamat'];
$e=$_POST['no_telp'];
$f=$_POST['email'];
$t=$_POST['ok'];
if($t==true)
{
include "sambung.php";
$query = "update kontak set id_unit = '$b', nama = '$c', alamat = '$d', no_telp = '$e', email = '$f' where id_kontak ='".$a."' ";
$result = mysqli_query($link,$query) or die('Error query:  '.$query);
echo "<script language=\"Javascript\">\n";
echo "window.alert('Data Telah Di Ganti');";
echo "</script>";
include"kontak.php";
exit(0);
}
}
include"atas.php";
include "sambung.php";
echo"<center><h2><strong>DATA <span class='highlight primary'>KONTAK</span></strong></h2>";
$a=$_GET['id_kontak'];
$query = mysqli_query($link,"select * from kontak where id_kontak ='$a'");
$jmlh=mysqli_fetch_array($query);
echo"<br><form action=kontak_ganti.php method=POST enctype=multipart/form-data>";
echo"<table>
	<tr>
		<td><font face='Trebuchet MS'>KONTAK</font></td>
		<td>&nbsp;</td>
		<td><input type=hidden name=id_kontak value='$jmlh[0]'>
		<input type=text name=nama_kontak style='font-family:Trebuchet MS;width:102px;' value='$jmlh[1]'>
		<input type=submit name=ok class='simpan' value=' '></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><font face='Trebuchet MS'>NAMA</font></td>
		<td>&nbsp;</td>
		<td><input type=text name=nama style='font-family:Trebuchet MS;width:180px;' value='$jmlh[2]'></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><font face='Trebuchet MS'>ALAMAT</font></td>
		<td>&nbsp;</td>
		<td><input type=text name=alamat style='font-family:Trebuchet MS;width:180px;' value='$jmlh[3]'></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><font face='Trebuchet MS'>NO TELP</font></td>
		<td>&nbsp;</td>
		<td><input type=text name=no_telp style='font-family:Trebuchet MS;width:180px;' value='$jmlh[4]'></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><font face='Trebuchet MS'>EMAIL</font></td>
		<td>&nbsp;</td>
		<td><input type=text name=email style='font-family:Trebuchet MS;width:180px;' value='$jmlh[5]'></td>
		<td>&nbsp;</td>
	</tr>
	</table><br><br>";
include"bawah.php";
?>