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
	$a=$_POST['id_visi_misi'];
	$b=$_POST['id_unit'];
	$c=$_POST['visi'];
	$d=$_POST['misi'];
	include "sambung.php";
	$query = "insert into visi_misi(id_visi_misi,id_unit,visi,misi) values('".$a."','".$b."','".$c."','".$d."')";
	$result = mysqli_query($link,$query) or die('Error query:  '.$query);
	echo "<script language=\"Javascript\">\n";
	echo "window.alert('Data Telah Di Simpan');";
	echo "</script>";
}
if($_GET['hps']=="hps")
{
	$a=$_GET["id_visi_misi"];
	include "sambung.php";
	$query = "delete from visi_misi where id_visi_misi ='".$a."'";
	$result = mysqli_query($link,$query) or die('Error query:  '.$query);
	echo "<script language=\"Javascript\">\n";
	echo "window.alert('Data Telah Di Hapus');";
	echo "</script>";
}
include"atas.php";
include "sambung.php";
echo"<center><h2><strong>DATA <span class='highlight primary'>VISI MISI</span></strong></h2>";
$query = mysqli_query($link,"select * from nama_visi_misi");
$jmlh=mysqli_fetch_array($query);
echo"<form action=visi_misi.php method=POST>";
$query = mysqli_query($link,"select * from visi_misi ORDER BY id_visi_misi ASC");
echo"
	<table border=0 class='table1' width=100%>
		<tr align=center height=20 bgcolor='green' style='color:white'>
			<td><font size=2>ID UNIT</font></td>
			<td><font size=2>VISI</font></td>
			<td><font size=2>MISI</font></td>
			<td colspan=2><font size=2>AKSI</font></td>
		</tr>";
$queryk = mysqli_query($link,"select * from visi_misi ORDER BY id_visi_misi ASC");
$auto=1;
while($jmlah=mysqli_fetch_array($queryk))
{
	$auto=$jmlah[0]+1;
}
echo"<tr align=center>
			<td><input type=hidden name=id_visi_misi value='$auto'>
			<select name=id_unit style='width:100%'>
				<option value=''></option>";
				$qisi = mysqli_query($link,"select * from unit ORDER BY id_unit ASC");
				while($jisi=mysqli_fetch_array($qisi))
				{
					echo"<option value='$jisi[0]'>ID-$jisi[0]:&nbsp;$jisi[1]</option>";
				}
				echo"
			</select></td>
			<td><input type=text name=visi style='width:100%'></td>
			<td><input type=text name=misi style='width:100%'></td>
			<td colspan=2><input type=submit name=simpan class='simpan' value='.'></td>
		</tr>";
while($jmlh=mysqli_fetch_array($query))
{
	echo"
		<tr align=center>
			<td valign=top><font size=2><label style='border:none'>$jmlh[1]</font></td>
			<td valign=top><font size=2><label style='border:none'>$jmlh[2]</font></td>
			<td valign=top><font size=2><label style='border:none'>$jmlh[3]</font></td>
			<td valign=top><font size=2><input type='button' class='ganti' onclick=window.location.href='visi_misi_ganti.php?id_visi_misi=$jmlh[0]'></font></td>
			<td valign=top><font size=2><input type='button' class='hapus' onclick=window.location.href='visi_misi.php?id_visi_misi=$jmlh[0]&hps=hps'></font></td>
		</tr>";
}
echo"
<tr align=center><td colspan=9><hr color=#db8d24 style='height:2px'></td></tr>
</table>
</form>";
include"bawah.php";
?>