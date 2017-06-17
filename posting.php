<?php
include("koneksi.php");

$sql="SELECT * FROM posting";
$query=mysql_query($sql);


while($baris=mysql_fetch_array($query)) {
    $idpost=$baris['id_posting'];
    $judulpos=$baris['judul'];
    $tanggal=$baris['tanggal_posting'];
    $penulis=$baris['penulis'];
    $isi=$baris['isi'];
    $kategori=$baris['kategori'];

		echo    "<fieldset class='well wel_berita'>
                <h3>$judulpos</h3>
                <h5><i> Kategori Berita </i><strong>$kategori</strong></h5>
                <p class='lead'>
                    by <a href='index.php'>$penulis</a>
                </p>
                <p><span class='glyphicon glyphicon-time'></span> Posted on $tanggal</p>
                <hr>
                
                <p> $isi </p>
                <a class='btn btn-primary' href='index.php?r=9&o=$idpost'>Read More <span class='glyphicon glyphicon-chevron-right'></span></a>
                <hr>
                </fieldset>";
}
?>
            <!--<img class='img-responsive' src='http://placehold.it/900x300' alt=''>-->