<?php
include("koneksi.php");

$usnameform=$_POST['usname'];
$passform=md5($_POST['pass']);

$sql="SELECT * FROM user where username='$usnameform' AND password='$passform'";
$query=mysql_query($sql);
$jumlah=mysql_num_rows($query);

$baris=mysql_fetch_array($query);

if ($jumlah!=0){
	session_start();

	$_SESSION['user']=$usnameform;
	//$_SESSION['usname']=$usnameform;
header("location: index.php");
}
else {
	echo "gagal $usnameform";
	//echo "<meta http-equiv='refresh' content='1; url=index.php'>";
}
?>