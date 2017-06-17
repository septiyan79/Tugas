<?php
include("koneksi.php");

$sql="SELECT * FROM posting where id_posting = '$_GET[o]'";
$query=mysql_query($sql);


while($baris=mysql_fetch_array($query)) {
    $idpost=$baris['id_posting'];
    $judulpos=$baris['judul'];
    $tanggal=$baris['tanggal_posting'];
    $penulis=$baris['penulis'];
    $isi=$baris['isi'];
    $komentar=$baris['komentar'];

		echo    "<fieldset>
                <h2>
                    <a href='#''>$judulpos</a>
                    
                </h2>
                <p class='lead'>
                    by <a href='index.php'>$penulis</a>
                </p>
                <p><span class='glyphicon glyphicon-time'></span> Posted on $tanggal</p>
                <hr>
                
                <p> $isi </p>
                <hr>
                </fieldset>";
        
        //INSERT COMMENT
        echo "<div class='well well-lg'>
        <h3> Komentar </h3><br>";
        echo"<form method='post' action='prockomentar.php'>
				
				<fieldset class='form-group'>
					ID komentar
					<input type='text' class='form-control' id='formGroupExampleInput' value='$idpost' name='id' readonly>
				</fieldset>

				<fieldset class='form-group'>
					
					<input type='text' class='form-control' id='formGroupExampleInput2' placeholder='Nama' name='nama'>
				</fieldset>
				
				<fieldset class='form-group'>
					
					<textarea class='form-control' id='exampleTextarea' rows='5' placeholder='Isi Komentar' name='komen'></textarea>
				</fieldset>
				<br>
				<button type='submit' class='btn btn_prmary'> Kirim Komentar </button>
				<br><hr>
				</form>";
		}
?>

									<!--TAMPILAN COMMENT-->
<?php
include ("koneksi.php");

$kom=mysql_query("SELECT posting.id_posting, posting.judul, posting.tanggal_posting, posting.penulis, posting.isi, posting.kategori, komentar.id, komentar.nama, komentar.komentar, komentar.tanggal_komentar from komentar left join posting on komentar.id_posting=posting.id_posting where posting.id_posting='$_GET[o]'");

while($d=mysql_fetch_array($kom)){
    $komentar=$d['komentar'];
    $nama=$d['nama'];
    $tanggal=$d['tanggal_komentar'];
    ?>
    <ul class='media-list well well-md'>
        <li class='media'>
            <div class='media-left'>
                <a href='#'>
                    <span> <?php echo $nama ?> </span>
                </a>
                <br><small><span> <?php echo $tanggal ?> </span></small>
            </div>
            <div class='media_body'>
                <h5><?php echo $komentar ?></h5>
            </div>
        </li>
    </ul>

<?php } ?>
</div>