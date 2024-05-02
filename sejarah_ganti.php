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
$a=$_POST['id_sejarah'];
$b=$_POST['id_unit'];
$c=$_POST['tgl_berdiri'];
$d=$_POST['sejarah'];
$t=$_POST['ok'];
if($t==true)
{
include "sambung.php";
$query = "update sejarah set id_unit = '$b', tgl_berdiri = '$c', sejarah = '$d' where id_sejarah ='".$a."' ";
$result = mysqli_query($link,$query) or die('Error query:  '.$query);
echo "<script language=\"Javascript\">\n";
echo "window.alert('Data Telah Di Ganti');";
echo "</script>";
include"sejarah.php";
exit(0);
}
}
include"atas.php";
include "sambung.php";
echo"<center><h2><strong>DATA <span class='highlight primary'>SEJARAH</span></strong></h2>";
$a=$_GET['id_sejarah'];
$query = mysqli_query($link,"select * from sejarah where id_sejarah ='$a'");
$jmlh=mysqli_fetch_array($query);
echo"<br><form action=sejarah_ganti.php method=POST enctype=multipart/form-data>";
echo"<table>
	<tr>
		<td><font face='Trebuchet MS'>ID&nbsp;UNIT</font></td>
		<td>&nbsp;</td>
		<td><input type=hidden name=id_sejarah value='$jmlh[0]'>
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
		<td><font face='Trebuchet MS'>TGL BERDIRI</font></td>
		<td>&nbsp;</td>
		<td><input type=date name=tgl_berdiri style='font-family:Trebuchet MS;width:180px;' value='$jmlh[2]'></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><font face='Trebuchet MS'>SEJARAH</font></td>
		<td>&nbsp;</td>
		<td><input type=text name=sejarah style='font-family:Trebuchet MS;width:180px;' value='$jmlh[3]'></td>
		<td>&nbsp;</td>
	</tr>
	</table><br><br>";
include"bawah.php";
?>