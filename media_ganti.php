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
$a=$_POST['id_media'];
$b=$_POST['media'];
$c=$_POST['link'];
$t=$_POST['ok'];
if($t==true)
{
include "sambung.php";
$query = "update media set media = '$b', link = '$c' where id_media ='".$a."' ";
$result = mysqli_query($link,$query) or die('Error query:  '.$query);
echo "<script language=\"Javascript\">\n";
echo "window.alert('Data Telah Di Ganti');";
echo "</script>";
include"media.php";
exit(0);
}
}
include"atas.php";
include "sambung.php";
echo"<center><h2><strong>DATA <span class='highlight primary'>MEDIA</span></strong></h2>";
$a=$_GET['id_media'];
$query = mysqli_query($link,"select * from media where id_media ='$a'");
$jmlh=mysqli_fetch_array($query);
echo"<br><form action=media_ganti.php method=POST enctype=multipart/form-data>";
echo"<table>
	<tr>
		<td><font face='Trebuchet MS'>MEDIA</font></td>
		<td>&nbsp;</td>
		<td><input type=hidden name=id_media value='$jmlh[0]'>
		<input type=text name=media style='font-family:Trebuchet MS;width:102px;' value='$jmlh[1]'>
		<input type=submit name=ok class='simpan' value=' '></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><font face='Trebuchet MS'>LINK</font></td>
		<td>&nbsp;</td>
		<td><input type=text name=link style='font-family:Trebuchet MS;width:180px;' value='$jmlh[2]'></td>
		<td>&nbsp;</td>
	</tr>
	</table><br><br>";
include"bawah.php";
?>