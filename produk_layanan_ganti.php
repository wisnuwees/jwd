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
$t=$_POST['ok'];
if($t==true)
{
include "sambung.php";

if($direktori=="img/")
{
		$query = "update produk_layanan set id_unit = '$b', harga = '$d', produk = '$e', jenis = '$f', testimoni = '$g', nama = '$h' where id_produk_layanan ='".$a."' ";
		$result = mysqli_query($link,$query) or die('Error query:  '.$query);
		}
else{
		$query = "update produk_layanan set id_unit = '$b', gambar_produk = '$direktori', harga = '$d', produk = '$e', jenis = '$f', testimoni = '$g', nama = '$h' where id_produk_layanan ='".$a."' ";
		$result = mysqli_query($link,$query) or die('Error query:  '.$query);
		move_uploaded_file($lokasi_file,$direktori);	
		}
echo "<script language=\"Javascript\">\n";
echo "window.alert('Data Telah Di Ganti');";
echo "</script>";
include"produk_layanan.php";
exit(0);
}
}
include"atas.php";
include "sambung.php";
echo"<center><h2><strong>DATA <span class='highlight primary'>PRODUK LAYANAN</span></strong></h2>";
$a=$_GET['id_produk_layanan'];
$query = mysqli_query($link,"select * from produk_layanan where id_produk_layanan ='$a'");
$jmlh=mysqli_fetch_array($query);
echo"<br><form action=produk_layanan_ganti.php method=POST enctype=multipart/form-data>";
echo"<table>
	<tr>
		<td><font face='Trebuchet MS'>ID&nbsp;UNIT</font></td>
		<td>&nbsp;</td>
		<td><input type=hidden name=id_produk_layanan value='$jmlh[0]'>
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
		<td><font face='Trebuchet MS'>GAMBAR PRODUK</font></td>
		<td>&nbsp;</td>
		<td><input type=file id=Filetext name=foto style='width:100%'></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><a href='$jmlh[2]'><img src='$jmlh[2]' style='width:100px;height:100px'></a></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><font face='Trebuchet MS'>HARGA</font></td>
		<td>&nbsp;</td>
		<td><input type=text name=harga style='font-family:Trebuchet MS;width:180px;' value='$jmlh[3]'></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><font face='Trebuchet MS'>PRODUK</font></td>
		<td>&nbsp;</td>
		<td><input type=text name=produk style='font-family:Trebuchet MS;width:180px;' value='$jmlh[4]'></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><font face='Trebuchet MS'>JENIS</font></td>
		<td>&nbsp;</td>
		<td><input type=text name=jenis style='font-family:Trebuchet MS;width:180px;' value='$jmlh[5]'></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><font face='Trebuchet MS'>TESTIMONI</font></td>
		<td>&nbsp;</td>
		<td><input type=text name=testimoni style='font-family:Trebuchet MS;width:180px;' value='$jmlh[6]'></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><font face='Trebuchet MS'>NAMA</font></td>
		<td>&nbsp;</td>
		<td><input type=text name=nama style='font-family:Trebuchet MS;width:180px;' value='$jmlh[7]'></td>
		<td>&nbsp;</td>
	</tr>
	</table><br><br>";
include"bawah.php";
?>