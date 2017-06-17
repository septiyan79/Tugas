<!DOCTYPE html>
<html>
<head>
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">
    <script>
    function hapusBarang (pesan) {
    	if (confirm(pesan)) {
    		return true;
    	}
    	else{
    		return false;
    	}
    }
    </script>
</head>

<?php
include("koneksi.php");

$sql="SELECT * FROM posting ORDER BY id_posting";
$query=mysql_query($sql);

echo "<table class='table table-striped'>
	<caption> <h1> <strong><i>Tabel Kelola Konten</i></strong><small><br><a class='btn btn-primary' href='index.php?r=8'> Tambah </a></small></h1></caption>
	<thead>
		<tr>
			<th>ID_Konten</th>
			<th>Judul</th>
			<th>Tanggal</th>
			<th>By</th>
			<th>Isi Berita</th>
			<th>Kategori</th>
			<th colspan='2'>Option</th>
		</tr>

	</thead>";

while($row=mysql_fetch_array($query)) {
	$no=$row['id_posting'];
	$judul=$row['judul'];
	$tanggal=$row['tanggal_posting'];
	$penulis=$row['penulis'];
	$isi=$row['isi'];
	$kategori=$row['kategori'];

echo "<tbody>
		<tr>
			<td>$no</td>
			<td>$judul</td>
			<td>$tanggal</td>
			<td>$penulis</td>
			<td>$isi</td>
			<td>$kategori</td>
			<td><a href='index.php?r=7&id=$no'> Edit </a></td>
			<td><a href='hapus.php?h=$no' onclick= 'return hapusBarang(\'Data Barang ' .$judul. 'Apakah Anda yakin? \')'>Hapus</a></td>
		</tr>
	</tbody>";
}
echo "</table>";
echo "<a class='btn btn-primary' href='index.php?r=8'> Tambah </a>";
?>
</html>