<?php
include ("koneksi.php");

$kom=mysql_query("SELECT posting.id_posting, posting.judul, posting.tanggal_posting, posting.penulis, posting.isi, posting.kategori, komentar.id, komentar.komentar, komentar.tanggal_komentar from komentar left join posting on komentar.id_posting=posting.id_posting where posting.id_posting='13'");

while($d=mysql_fetch_array($kom)){
    $komentar=$d['komentar'];
    ?>
    <ul class='media-list'>
        <li class='media'>
            <div class='media-left'>
                <a href='#'>
                    <span> AAA </span>
                </a>
            </div>
            <div class='media_body'>
                <h5><?php echo $komentar ?></h5>
            </div>
        </li>
    </ul>

<?php } ?>