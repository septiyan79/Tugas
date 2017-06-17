<?php
include ("koneksi.php");

$username=$_POST['username'];
$password=md5($_POST['password']);
$level=$_POST['lvl'];


$sql="INSERT INTO user (username, password, level) VALUES ('$username', '$password', '$level')";
//$hasil=mysql_query($sql);

if (mysql_query($sql)==TRUE){
	echo "<h1>Tambah User BERHASIL!!</h1>";
	echo "<meta http-equiv='refresh' content='1; url=index.php?r=2'>";
}
else {
	echo "error".$sql;
	echo "<meta http-equiv='refresh' content='1; url=index.php?r=2'>";
}


?>