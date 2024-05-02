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
	$a=$_POST['id_kontak'];
	$b=$_POST['id_unit'];
	$c=$_POST['nama'];
	$d=$_POST['alamat'];
	$e=$_POST['no_telp'];
	$f=$_POST['email'];
	include "sambung.php";
	$query = "insert into kontak(id_kontak,id_unit,nama,alamat,no_telp,email) values('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."')";
	$result = mysqli_query($link,$query) or die('Error query:  '.$query);
	echo "<script language=\"Javascript\">\n";
	echo "window.alert('Data Telah Di Simpan');";
	echo "</script>";
}
if($_GET['hps']=="hps")
{
	$a=$_GET["id_kontak"];
	include "sambung.php";
	$query = "delete from kontak where id_kontak ='".$a."'";
	$result = mysqli_query($link,$query) or die('Error query:  '.$query);
	echo "<script language=\"Javascript\">\n";
	echo "window.alert('Data Telah Di Hapus');";
	echo "</script>";
}
include"atas.php";
include "sambung.php";
echo"<center><h2><strong>DATA <span class='highlight primary'>KONTAK</span></strong></h2>";
$query = mysqli_query($link,"select * from nama_kontak");
$jmlh=mysqli_fetch_array($query);
echo"<form action=kontak.php method=POST>";
$query = mysqli_query($link,"select * from kontak ORDER BY id_kontak ASC");
echo"
	<table border=0 class='table1' width=100%>
		<tr align=center height=20 bgcolor='green' style='color:white'>
			<td><font size=2>ID UNIT</font></td>
			<td><font size=2>NAMA</font></td>
			<td><font size=2>ALAMAT</font></td>
			<td><font size=2>NO TELP</font></td>
			<td><font size=2>EMAIL</font></td>
			<td colspan=2><font size=2>AKSI</font></td>
		</tr>";
$queryk = mysqli_query($link,"select * from kontak ORDER BY id_kontak ASC");
$auto=1;
while($jmlah=mysqli_fetch_array($queryk))
{
	$auto=$jmlah[0]+1;
}
echo"<tr align=center>
			<td><input type=hidden name=id_kontak value='$auto'>
			<select name=id_unit style='width:100%'>
				<option value=''></option>";
				$qisi = mysqli_query($link,"select * from unit ORDER BY id_unit ASC");
				while($jisi=mysqli_fetch_array($qisi))
				{
					echo"<option value='$jisi[0]'>ID-$jisi[0]:&nbsp;$jisi[1]</option>";
				}
				echo"
			</select>
			<td><input type=text name=nama style='width:100%'></td>
			<td><input type=text name=alamat style='width:100%'></td>
			<td><input type=text name=no_telp style='width:100%'></td>
			<td><input type=text name=email style='width:100%'></td>
			<td colspan=2><input type=submit name=simpan class='simpan' value='.'></td>
		</tr>";
while($jmlh=mysqli_fetch_array($query))
{
	echo"
		<tr align=center>
			<td><font size=2><label style='border:none'>$jmlh[1]</font></td>
			<td><font size=2><label style='border:none'>$jmlh[2]</font></td>
			<td><font size=2><label style='border:none'>$jmlh[3]</font></td>
			<td><font size=2><label style='border:none'>$jmlh[4]</font></td>
			<td><font size=2><label style='border:none'>$jmlh[5]</font></td>
			<td><font size=2><input type='button' class='ganti' onclick=window.location.href='kontak_ganti.php?id_kontak=$jmlh[0]'></font></td>
			<td><font size=2><input type='button' class='hapus' onclick=window.location.href='kontak.php?id_kontak=$jmlh[0]&hps=hps'></font></td>
		</tr>";
}
echo"
<tr align=center><td colspan=9><hr color=#db8d24 style='height:2px'></td></tr>
</table>
</form>";
include"bawah.php";
?>