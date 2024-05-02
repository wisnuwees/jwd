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
$a=$_POST['id_struktur'];
$b=$_POST['id_unit'];
$c=$_POST['gambar'];
$lokasi_file=$_FILES['gambar']['tmp_name'];
$tipe_file=$_FILES['gambar']['type'];
$nama_file=$_FILES['gambar']['name'];
$direktori="img/$nama_file";
$t=$_POST['ok'];
if($t==true)
{
include "sambung.php";

if($direktori=="img/")
{
		$query = "update struktur set id_unit = '$b' where id_struktur ='".$a."' ";
		$result = mysqli_query($link,$query) or die('Error query:  '.$query);
}
else{
		$query = "update struktur set id_unit = '$b', gambar = '$direktori' where id_struktur ='".$a."' ";
		$result = mysqli_query($link, $query) or die('Error query:  ' . $query);
		move_uploaded_file($lokasi_file,$direktori);	
		}
		echo "<script language=\"Javascript\">\n";
		echo "window.alert('Data Telah Di Ganti');";
		echo "</script>";
		include"struktur.php";
		exit(0);
}
}
include"atas.php";
include "sambung.php";
echo"<center><h2><strong>DATA <span class='highlight primary'>	STRUKTUR</span></strong></h2>";
$a=$_GET['id_struktur'];
$query = mysqli_query($link,"select * from struktur where id_struktur ='$a'");
$jmlh=mysqli_fetch_array($query);
echo"<br><form action=struktur_ganti.php method=POST enctype=multipart/form-data>";
echo"<table>
	<tr>
		<td><font face='Trebuchet MS'>ID STRUKTUR</font></td>
		<td>&nbsp;</td>
		<td><input type=hidden name=id_struktur value='$jmlh[0]'>
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
		<td><font face='Trebuchet MS'>GAMBAR</font></td>
		<td>&nbsp;</td>
		<td><input type=file id=Filetext name=gambar style='font-family:Trebuchet MS;width:180px;' value='$jmlh[2]'></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><font face='Trebuchet MS'>&nbsp;</font></td>
		<td>&nbsp;</td>
		<td><a href='$jmlh[2]'><img src='$jmlh[2]' width=120px height=120px></a></td>
		<td>&nbsp;</td>
	</tr>
	</table><br><br>";
include"bawah.php";
?>