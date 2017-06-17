<?php
include("koneksi.php");

$id=$_POST['id'];
$uname=$_POST['username'];
$pwd=md5($_POST['password']);
$lvl=$_POST['lvl'];

session_start();
$_SESSION['usr']=$uname;

	$hasil=mysql_query("UPDATE user SET
			username='$uname',
			password='$pwd',
			level='$lvl'
			WHERE id_user='$id'");

		if ($hasil) {
			echo "<div class='panel panel-default'>
			<h4 class='panel-heading'> SUKSES UPDATE $uname </h4>
			</div>";
			echo "<meta http-equiv='refresh' content='1; url=index.php?r=2'>";
		} else {
			echo "Gagal";
		}

?>