<?php
include("koneksi.php");

$sql="SELECT * FROM katalog";
$query=mysql_query($sql);

echo "<table class='table table-striped'>
	<caption> <h1> <strong><i>Tabel Laporan Katalog</i></strong></h1></caption>
	<thead>
		<tr>
			<th>No</th>
			<th>Kode katalog</th>
			<th>Judul Katalog</th>
			<th>Jenis</th>
			
			
		</tr>

	</thead>";

while($row=mysql_fetch_array($query)) {
	$id=$row['id_katalog'];
	$kode=$row['kode_katalog'];
	$judul=$row['judul_katalog'];
	$jenis=$row['Jenis'];
	

echo "<tbody>
		<tr>
			<td>$id</td>
			<td>$kode</td>
			<td>$judul</td>
			<td>$jenis</td>
		</tr>
	</tbody>";
}
echo "</table>";

?>