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
$a=$_POST['id_tugas_tj'];
$b=$_POST['id_unit'];
$c=$_POST['id_karyawan'];
$d=$_POST['tugas'];
$e=$_POST['tgg_jwb'];
$t=$_POST['ok'];
if($t==true)
{
include "sambung.php";
$query = "update tugas_tj set id_unit = '$b', id_karyawan = '$c', tugas = '$d', tgg_jwb = '$e' where id_tugas_tj ='".$a."' ";
$result = mysqli_query($link,$query) or die('Error query:  '.$query);
echo "<script language=\"Javascript\">\n";
echo "window.alert('Data Telah Di Ganti');";
echo "</script>";
include"tugas_tj.php";
exit(0);
}
}
include"atas.php";
include "sambung.php";
echo"<center><h2><strong>DATA <span class='highlight primary'>TUGAS TJ</span></strong></h2>";
$a=$_GET['id_tugas_tj'];
$query = mysqli_query($link,"select * from tugas_tj where id_tugas_tj ='$a'");
$jmlh=mysqli_fetch_array($query);
echo"<br><form action=tugas_tj_ganti.php method=POST enctype=multipart/form-data>";
echo"<table>
	<tr>
		<td><font face='Trebuchet MS'>TUGAS TJ</font></td>
		<td>&nbsp;</td>
		<td><input type=hidden name=id_tugas_tj value='$jmlh[0]'>
		<select name=id_unit style='width:180px'>
				<option value='$jmlh[1]'>$jmlh[1]</option>";
				$qisi = mysqli_query($link,"select * from unit ORDER BY id_unit ASC");
				while($jisi=mysqli_fetch_array($qisi))
				{
					echo"<option value='$jisi[0]'>ID-$jisi[0]:&nbsp;$jisi[1]</option>";
				}
				echo"
			</select>
		<input type=submit name=ok class='simpan' value=' '></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><font face='Trebuchet MS'>ID KARYAWAN</font></td>
		<td>&nbsp;</td>
		<td><select name=id_karyawan style='width:180px'>
				<option value='$jmlh[2]'>$jmlh[2]</option>";
				$qisi = mysqli_query($link,"select * from karyawan ORDER BY id_karyawan ASC");
				while($jisi=mysqli_fetch_array($qisi))
				{
					echo"<option value='$jisi[0]'>ID-$jisi[0]:&nbsp;$jisi[2]</option>";
				}
				echo"
			</select></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><font face='Trebuchet MS'>TUGAS</font></td>
		<td>&nbsp;</td>
		<td><input type=text name=tugas style='font-family:Trebuchet MS;width:180px;' value='$jmlh[3]'></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><font face='Trebuchet MS'>TGG JWB</font></td>
		<td>&nbsp;</td>
		<td><input type=text name=tgg_jwb style='font-family:Trebuchet MS;width:180px;' value='$jmlh[4]'></td>
		<td>&nbsp;</td>
	</tr>
	</table><br><br>";
include"bawah.php";
?>