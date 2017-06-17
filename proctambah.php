<?php
include ("koneksi.php");

$judul=$_POST['jdl'];
$penulis=$_POST['pnls'];
$berita=$_POST['brta'];
$kategori=$_POST['ktgr'];

$sql="INSERT INTO posting (judul, penulis, isi, kategori) VALUES ('$judul', '$penulis', '$berita', '$kategori')";
//$hasil=mysql_query($sql);

if (mysql_query($sql)==TRUE){
	echo "SuksEs";
	echo "<meta http-equiv='refresh' content='1; url=index.php?r=6'>";
}
else {
	echo "error".$sql;
	echo "<meta http-equiv='refresh' content='1; url=index.php?r=6'>";
}


?>