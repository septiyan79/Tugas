<?php
include ("koneksi.php");
//session_start();

//$admin=$_SESSION['usr'];


$hapus=$_GET['id'];

$sql="DELETE FROM user where id_user='$hapus'";
$query=mysql_query($sql);

if ($query) {
	echo"<h1> USER Telah Dihapus!!</h1>";
	echo "<meta http-equiv='refresh' content='1; url=index.php?r=2'>";
} else {
	echo "<h1>GAGAL MENGHAPUS USER!! </h1>";
}


?>