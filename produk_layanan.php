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
	$a=$_POST['id_produk_layanan'];
	$b=$_POST['id_unit'];
	$c=$_POST['gambar_produk'];
	$d=$_POST['harga'];
	$e=$_POST['produk'];
	$f=$_POST['jenis'];
	$g=$_POST['testimoni'];
	$h=$_POST['nama'];
$lokasi_file=$_FILES['foto']['tmp_name'];
$tipe_file=$_FILES['foto']['type'];
$nama_file=$_FILES['foto']['name'];
$direktori="img/$nama_file";
	include "sambung.php";
	$query = "insert into produk_layanan(id_produk_layanan,id_unit,gambar_produk,harga,produk,jenis,testimoni,nama) values('".$a."','".$b."','".$direktori."','".$d."','".$e."','".$f."','".$g."','".$h."')";
	$result = mysqli_query($link,$query) or die('Error query:  '.$query);
move_uploaded_file($lokasi_file,$direktori);
	echo "<script language=\"Javascript\">\n";
	echo "window.alert('Data Telah Di Simpan');";
	echo "</script>";
}
if($_GET['hps']=="hps")
{
	$a=$_GET["id_produk_layanan"];
	include "sambung.php";
	$query = "delete from produk_layanan where id_produk_layanan ='".$a."'";
	$result = mysqli_query($link,$query) or die('Error query:  '.$query);
	echo "<script language=\"Javascript\">\n";
	echo "window.alert('Data Telah Di Hapus');";
	echo "</script>";
}
include"atas.php";
include "sambung.php";
echo"<center><h2><strong>DATA <span class='highlight primary'>PRODUK LAYANAN</span></strong></h2>";
$query = mysqli_query($link,"select * from nama_produk_layanan");
$jmlh=mysqli_fetch_array($query);
echo"<form action=produk_layanan.php method=POST enctype=multipart/form-data>";
$query = mysqli_query($link,"select * from produk_layanan ORDER BY id_produk_layanan ASC");
echo"
	<table border=0 class='table1' width=100%>
		<tr align=center height=20 bgcolor='green' style='color:white'>
			<td><font size=2>ID UNIT</font></td>
			<td><font size=2>GAMBAR PRODUK</font></td>
			<td><font size=2>HARGA</font></td>
			<td><font size=2>PRODUK</font></td>
			<td><font size=2>JENIS</font></td>
			<td><font size=2>TESTIMONI</font></td>
			<td><font size=2>NAMA</font></td>
			<td colspan=2><font size=2>AKSI</font></td>
		</tr>";
$queryk = mysqli_query($link,"select * from produk_layanan ORDER BY id_produk_layanan ASC");
$auto=1;
while($jmlah=mysqli_fetch_array($queryk))
{
	$auto=$jmlah[0]+1;
}
echo"<tr align=center>
			<td><input type=hidden name=id_produk_layanan value='$auto'>
			<select name=id_unit style='width:100%'>
				<option value=''></option>";
				$qisi = mysqli_query($link,"select * from unit ORDER BY id_unit ASC");
				while($jisi=mysqli_fetch_array($qisi))
				{
					echo"<option value='$jisi[0]'>ID-$jisi[0]:&nbsp;$jisi[1]</option>";
				}
				echo"
			</select>
			<td><input type=file id=Filetext name=foto style='width:100%'></td>
			<td><input type=text name=harga style='width:100%'></td>
			<td><input type=text name=produk style='width:100%'></td>
			<td><input type=text name=jenis style='width:100%'></td>
			<td><input type=text name=testimoni style='width:100%'></td>
			<td><input type=text name=nama style='width:100%'></td>
			<td colspan=2><input type=submit name=simpan class='simpan' value='.'></td>
		</tr>";
while($jmlh=mysqli_fetch_array($query))
{
	echo"
		<tr align=center>
			<td  valign=top><font size=2><label style='border:none'>$jmlh[1]</font></td>
			<td  valign=top><a href='$jmlh[2]'><img src='$jmlh[2]' style='width:100px;height:100px'></a></td>
			<td  valign=top><font size=2><label style='border:none'>$jmlh[3]</font></td>
			<td  valign=top><font size=2><label style='border:none'>$jmlh[4]</font></td>
			<td  valign=top><font size=2><label style='border:none'>$jmlh[5]</font></td>
			<td  valign=top><font size=2><label style='border:none'>$jmlh[6]</font></td>
			<td  valign=top><font size=2><label style='border:none'>$jmlh[7]</font></td>
			<td  valign=top><font size=2><input type='button' class='ganti' onclick=window.location.href='produk_layanan_ganti.php?id_produk_layanan=$jmlh[0]'></font></td>
			<td  valign=top><font size=2><input type='button' class='hapus' onclick=window.location.href='produk_layanan.php?id_produk_layanan=$jmlh[0]&hps=hps'></font></td>
		</tr>";
}
echo"
<tr align=center><td colspan=9><hr color=#db8d24 style='height:2px'></td></tr>
</table>
</form>";
include"bawah.php";
?>