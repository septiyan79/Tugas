<?php
include ("koneksi.php");

$hapus=$_GET['h'];

$sql="DELETE FROM posting where id_posting='$hapus'";
$query=mysql_query($sql);

if ($query) {
echo"<h1> Konten Telah Dihapus!!</h1>";
echo "<meta http-equiv='refresh' content='1; url=index.php?r=6'>";
} else {
	echo "<h1>GAGAL MENGHAPUS KONTEN!! </h1>";
}

/*if (isset($_GET['id_posting'])){
	$id_posting=$_GET['id_posting'];

$query= "SELECT * FROM posting where id_posting='$_GET[h]'";
$hasil=mysql_query($query);
}
else {
	die ("Error. Tidak ada NIM yang dipilih");
}

if (!empty($id_posting) && $id_posting !=""){
	$hapus="DELETE FROM posting where id_posting='$_GET[h]'";
	$sql=mysql_query($hapus);
	if ($sql){
		?>
			<script language ="javaScript">
			alert('Seluruh Data Mahasiswa <?php =$id_posting ?> Berhasil Dihapus!');
*/
?>