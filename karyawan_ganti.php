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
$a=$_POST['id_karyawan'];
$b=$_POST['id_unit'];
$c=$_POST['nama'];
$d=$_POST['bagian'];
$e=$_POST['jabatan'];
$f=$_POST['foto'];
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
$query = "update karyawan set id_unit = '$b', nama = '$c', bagian = '$d', jabatan = '$e' where id_karyawan ='".$a."' ";
$result = mysqli_query($link,$query) or die('Error query:  '.$query);}
else{
$query = "update karyawan set id_unit = '$b', nama = '$c', bagian = '$d', jabatan = '$e', foto = '$direktori' where id_karyawan ='".$a."' ";
$result = mysqli_query($link,$query) or die('Error query:  '.$query);		move_uploaded_file($lokasi_file,$direktori);	
		}
		echo "<script language=\"Javascript\">\n";
		echo "window.alert('Data Telah Di Ganti');";
		echo "</script>";
		include"karyawan.php";
		exit(0);
}
}
include"atas.php";
include "sambung.php";
echo"<center><h2><strong>DATA <span class='highlight primary'>KARYAWAN</span></strong></h2>";
$a=$_GET['id_karyawan'];
$query = mysqli_query($link,"select * from karyawan where id_karyawan ='$a'");
$jmlh=mysqli_fetch_array($query);
echo"<br><form action=karyawan_ganti.php method=POST enctype=multipart/form-data>";
echo"<table>
	<tr>
		<td><font face='Trebuchet MS'>ID UNIT</font></td>
		<td>&nbsp;</td>
		<td><input type=hidden name=id_karyawan value='$jmlh[0]'>
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
		<td><font face='Trebuchet MS'>NAMA</font></td>
		<td>&nbsp;</td>
		<td><input type=text name=nama style='font-family:Trebuchet MS;width:180px;' value='$jmlh[2]'></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><font face='Trebuchet MS'>BAGIAN</font></td>
		<td>&nbsp;</td>
		<td><input type=text name=bagian style='font-family:Trebuchet MS;width:180px;' value='$jmlh[3]'></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><font face='Trebuchet MS'>JABATAN</font></td>
		<td>&nbsp;</td>
		<td><input type=text name=jabatan style='font-family:Trebuchet MS;width:180px;' value='$jmlh[4]'></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><font face='Trebuchet MS'>FOTO</font></td>
		<td>&nbsp;</td>
		<td><input type=file id=Filetext name=foto style='width:100%'></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><font face='Trebuchet MS'>&nbsp;</font></td>
		<td>&nbsp;</td>
		<td><a href='$jmlh[5]'><img src='$jmlh[5]' width=120px height=120px></a></td>
		<td>&nbsp;</td>
	</tr>
	</table><br><br>";
include"bawah.php";
?>