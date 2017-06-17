<!DOCTYPE html>
<html>
<head>
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">
</head>

<?php
include("koneksi.php");

$idp=$_POST['id'];
$penu=$_POST['penulis'];
$jdl=$_POST['judul'];
$isi=$_POST['isi'];
$kategor=$_POST['ktgr'];

/*while($row=mysql_fetch_array($query)) {
	$no=$row['id_posting'];
*/
	$hasil=mysql_query("UPDATE posting SET
			judul='$jdl',
			penulis='$penu',
			isi='$isi',
			kategori='$kategor'
			WHERE id_posting='$idp'");

		if ($hasil) {
			echo "<div class='panel panel-default'>
			<h4 class='panel-heading'> SUKSES UPDATE </h4>
			</div>";
			echo "<meta http-equiv='refresh' content='1; url=index.php?r=6'>";
		} else {
			echo "Gagal";
		}

?>
</html>