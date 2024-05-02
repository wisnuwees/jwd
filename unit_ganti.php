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
$a=$_POST['id_unit'];
$b=$_POST['unit'];
$c=$_POST['tentang'];
$lokasi_file=$_FILES['foto']['tmp_name'];
$tipe_file=$_FILES['foto']['type'];
$nama_file=$_FILES['foto']['name'];
$direktori="img/$nama_file";

$lokasi_files=$_FILES['gambar']['tmp_name'];
$tipe_files=$_FILES['gambar']['type'];
$nama_files=$_FILES['gambar']['name'];
$direktoris="img/$nama_files";
$t=$_POST['ok'];
if($t==true)
{
include "sambung.php";
if($direktori=="img/")
{
	$query = "update unit set unit = '$b', tentang = ' $c' where id_unit ='".$a."' ";
	$result = mysqli_query($link,$query) or die('Error query:  '.$query);
}
if($direktori!="img/")
{
	$query = "update unit set unit = '$b', tentang = ' $c', foto = ' $direktori' where id_unit ='".$a."' ";
	$result = mysqli_query($link,$query) or die('Error query:  '.$query);
	move_uploaded_file($lokasi_file,$direktori);	
}
if($direktoris=="img/")
{
	$query = "update unit set unit = '$b', tentang = ' $c' where id_unit ='".$a."' ";
	$result = mysqli_query($link,$query) or die('Error query:  '.$query);
}
if($direktoris!="img/")
{
	$query = "update unit set unit = '$b', tentang = ' $c', gambar = ' $direktoris' where id_unit ='".$a."' ";
	$result = mysqli_query($link,$query) or die('Error query:  '.$query);
	move_uploaded_file($lokasi_files,$direktoris);	
}
include"unit.php";
exit(0);
}
}
include"atas.php";
include "sambung.php";
echo"<center><h2><strong>DATA <span class='highlight primary'>UNIT</span></strong></h2>";
$a=$_GET['id_unit'];
$query = mysqli_query($link,"select * from unit where id_unit ='$a'");
$jmlh=mysqli_fetch_array($query);
echo"<br><form action=unit_ganti.php method=POST enctype=multipart/form-data>";
echo"<table>
	<tr>
		<td><font face='Trebuchet MS'>UNIT</font></td>
		<td>&nbsp;</td>
		<td><input type=hidden name=id_unit value='$jmlh[0]'>
		<input type=text name=unit style='font-family:Trebuchet MS;width:102px;' value='$jmlh[1]'>
		<input type=submit name=ok class='simpan' value=' '></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><font face='Trebuchet MS'>TENTANG</font></td>
		<td>&nbsp;</td>
		<td><input type=text name=tentang style='font-family:Trebuchet MS;width:102px;' value='$jmlh[2]'></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><font face='Trebuchet MS'>FOTO</font></td>
		<td>&nbsp;</td>
		<td><input type=file id=Filetext name=foto style='width:100%'></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><a href='$jmlh[3]'><img src='$jmlh[3]' style='width:100px;height:100px'></a></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><font face='Trebuchet MS'>GAMBAR</font></td>
		<td>&nbsp;</td>
		<td><input type=file id=Filetext name=gambar style='width:100%'></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><a href='$jmlh[4]'><img src='$jmlh[4]' style='width:120px;height:120px'></a></td>
		<td>&nbsp;</td>
	</tr>
	</table><br><br>";
include"bawah.php";
?>