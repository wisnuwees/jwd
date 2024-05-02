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
	$a=$_POST['id_struktur'];
	$b=$_POST['id_unit'];
	$c=$_POST['gambar'];
$lokasi_file=$_FILES['gambar']['tmp_name'];
$tipe_file=$_FILES['gambar']['type'];
$nama_file=$_FILES['gambar']['name'];
$direktori="img/$nama_file";
	include "sambung.php";
	$query = "insert into struktur(id_struktur,id_unit,gambar) values('".$a."','".$b."','" . $direktori . "')";
	$result = mysqli_query($link,$query) or die('Error query:  '.$query);
move_uploaded_file($lokasi_file,$direktori);
	echo "<script language=\"Javascript\">\n";
	echo "window.alert('Data Telah Di Simpan');";
	echo "</script>";
}
if($_GET['hps']=="hps")
{
	$a=$_GET["id_struktur"];
	include "sambung.php";
	$query = "delete from struktur where id_struktur ='".$a."'";
	$result = mysqli_query($link,$query) or die('Error query:  '.$query);
	echo "<script language=\"Javascript\">\n";
	echo "window.alert('Data Telah Di Hapus');";
	echo "</script>";
}
include"atas.php";
include "sambung.php";
echo"<center><h2><strong>DATA <span class='highlight primary'>STRUKTUR</span></strong></h2>";
$query = mysqli_query($link,"select * from nama_struktur");
$jmlh=mysqli_fetch_array($query);
echo"<form action=struktur.php method=POST enctype=multipart/form-data>";
$query = mysqli_query($link,"select * from struktur ORDER BY id_struktur ASC");
echo"
	<table border=0 class='table1' width=100%>
		<tr align=center height=20 bgcolor='green' style='color:white'>
			<td><font size=2>ID UNIT</font></td>
			<td><font size=2>GAMBAR</font></td>
			<td colspan=2><font size=2>AKSI</font></td>
		</tr>";
$queryk = mysqli_query($link,"select * from struktur ORDER BY id_struktur ASC");
$auto=1;
while($jmlah=mysqli_fetch_array($queryk))
{
	$auto=$jmlah[0]+1;
}
echo"<tr align=center>
			<td><input type=hidden name=id_struktur value='$auto'>
			<select name=id_unit style='width:100%'>
				<option value=''></option>";
				$qisi = mysqli_query($link,"select * from unit ORDER BY id_unit ASC");
				while($jisi=mysqli_fetch_array($qisi))
				{
					echo"<option value='$jisi[0]'>ID-$jisi[0]:&nbsp;$jisi[1]</option>";
				}
				echo"
			</select>
			<td><input type=file id=Filetext name=gambar style='width:100%'></td>
			<td colspan=2><input type=submit name=simpan class='simpan' value='.'></td>
		</tr>";
while($jmlh=mysqli_fetch_array($query))
{
	echo"
		<tr align=center>
			<td><font size=2><label style='border:none'>$jmlh[1]</font></td>
			<td><a href='$jmlh[2]'><img src='$jmlh[2]' style='width:100px;height:100px'></a></td>
			<td><font size=2><input type='button' class='ganti' onclick=window.location.href='struktur_ganti.php?id_struktur=$jmlh[0]'></font></td>
			<td><font size=2><input type='button' class='hapus' onclick=window.location.href='struktur.php?id_struktur=$jmlh[0]&hps=hps'></font></td>
		</tr>";
}
echo"
<tr align=center><td colspan=9><hr color=#db8d24 style='height:2px'></td></tr>
</table>
</form>";
include"bawah.php";
?>