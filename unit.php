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
if($_POST['simpan']==".")
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

	include "sambung.php";
	$query = "insert into unit(id_unit,unit,tentang,foto,gambar) values('".$a."','".$b."','".$c."','" . $direktori . "','" . $direktoris . "')";
	$result = mysqli_query($link,$query) or die('Error query:  '.$query);
move_uploaded_file($lokasi_file,$direktori);
move_uploaded_file($lokasi_files,$direktoris);

	echo "<script language=\"Javascript\">\n";
	echo "window.alert('Data Telah Di Simpan');";
	echo "</script>";
}
if($_GET['hps']=="hps")
{
	$a=$_GET["id_unit"];
	include "sambung.php";
	$query = "delete from unit where id_unit ='".$a."'";
	$result = mysqli_query($link,$query) or die('Error query:  '.$query);
	echo "<script language=\"Javascript\">\n";
	echo "window.alert('Data Telah Di Hapus');";
	echo "</script>";
}
include"atas.php";
include "sambung.php";
echo"<center><h2><strong>DATA <span class='highlight primary'>UNIT</span></strong></h2>";
$query = mysqli_query($link,"select * from unit");
$jmlh=mysqli_fetch_array($query);
echo"<form action=unit.php method=POST enctype=multipart/form-data>";
$query = mysqli_query($link,"select * from unit ORDER BY id_unit ASC");
echo"
	<table border=0 class='table1' width=100%>
		<tr align=center height=20 bgcolor='green' style='color:white'>
			<td><font size=2>UNIT</font></td>
			<td><font size=2>TENTANG</font></td>
			<td><font size=2>FOTO</font></td>
			<td><font size=2>GAMBAR</font></td>
			<td colspan=2><font size=2>AKSI</font></td>
		</tr>";
$queryk = mysqli_query($link,"select * from unit ORDER BY id_unit ASC");
$auto=1;
while($jmlah=mysqli_fetch_array($queryk))
{
	$auto=$jmlah[0]+1;
}
echo"<tr align=center>
			<td><input type=hidden name=id_unit value='$auto'>
			<input type=text name=unit style='width:100%'></td>
			<td><input type=text name=tentang style='width:100%'></td>
			<td><input type=file id=Filetext name=foto style='width:100%'></td>
			<td><input type=file id=Filetext name=gambar style='width:100%'></td>
			<td colspan=2><input type=submit name=simpan class='simpan' value='.'></td>
		</tr>";
while($jmlh=mysqli_fetch_array($query))
{
	echo"
		<tr align=center>
			<td valign=top><font size=2><label style='border:none'>$jmlh[1]</font></td>
			<td valign=top><font size=2><label style='border:none'>$jmlh[2]</font></td>
			<td valign=top><a href='$jmlh[3]'><img src='$jmlh[3]' style='width:100px;height:100px'></a></td>
			<td valign=top><a href='$jmlh[4]'><img src='$jmlh[4]' style='width:100px;height:100px'></a></td>
			<td valign=top><font size=2><input type='button' class='ganti' onclick=window.location.href='unit_ganti.php?id_unit=$jmlh[0]'></font></td>
			<td valign=top><font size=2><input type='button' class='hapus' onclick=window.location.href='unit.php?id_unit=$jmlh[0]&hps=hps'></font></td>
		</tr>";
}
echo"
<tr align=center><td colspan=9><hr color=#db8d24 style='height:2px'></td></tr>
</table>
</form>";
include"bawah.php";
?>