<?php
include("koneksi.php");

$sql="SELECT * FROM user";
$query=mysql_query($sql);

echo "<table class='table table-striped'>
	<caption> <h1> <strong><i>Tabel Management User</i></strong><small><br><a class='btn btn-primary' href='index.php?r=5'> Tambah User </a></small></h1></caption>
	<thead>
		<tr>
			<th>ID_User</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
			<th colspan='2'>Option</th>
		</tr>
	</thead>";

while($row=mysql_fetch_array($query)) {
	$no=$row['id_user'];
	$judul=$row['username'];
	$tanggal=$row['password'];
	$level=$row['level'];

echo "<tbody>
		<tr>
			<td>$no</td>
			<td>$judul</td>
			<td>$tanggal</td>
			<td>$level</td>
			
			<td><a href='index.php?r=11&id=$no'> Edit </a></td>
			<td><a href='proc_hapus_user.php?id=$no' onclick= 'return hapusBarang(\'Data Barang ' .$judul. 'Apakah Anda yakin? \')'>Hapus</a></td>
		</tr>
	</tbody>";
}
echo "</table>";
echo "<a class='btn btn-primary' href='index.php?r=5'> Tambah User</a>";
?>