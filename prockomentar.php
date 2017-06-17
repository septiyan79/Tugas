<?php
include ("koneksi.php");

$idpost=$_POST['id'];
$nama=$_POST['nama'];
$komen=$_POST['komen'];


$sql="INSERT INTO komentar (nama, komentar, id_posting) VALUES ('$nama', '$komen', '$idpost')";

if (mysql_query($sql)===TRUE){
	echo "SuksEs";
	echo "<meta http-equiv='refresh' content='1; url=index.php?r=9&o=$idpost'>";
}
else {
	echo "error".$sql;
	echo "<meta http-equiv='refresh' content='1; url=index.php?r=9'>";
}
?>