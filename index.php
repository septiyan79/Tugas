<?php
include("koneksi.php");
session_start();


//$i=$_GET['i'];
//for ($i=0; $i < 11; $i++) { 
  //  $i = $i+1;
//}
$r=$_GET['r'];
if ($r <= ~11) $r=1;

switch($r){
    case 1: $kategori="kiriman";break;
    case 2: $kategori="user";break;
    case 3: $kategori="profil";break;
    case 4: $kategori="riwayat";break;
    case 5: $kategori="gallery";break;
    case 6: $kategori="login";break;
    case 7: $kategori="kelola";break;
    case 11: $kategori="edit_user";break;
    
}

$sql="SELECT * FROM posting where kategori='$kategori'";
$query=mysql_query($sql);
$row=mysql_fetch_array($query);

$judul=$row['judul'];
$tanggal=$row['tanggal'];
$penulis=$row['penulis'];
$isi=$row['isi'];

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">
    <link href="css/half-slider.css" rel="stylesheet">
    <link href="css/thumbnail-gallery.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img class="logo" src="3d.png">
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="navbar-brand" href="index.php?r=1&i=$idpost"><strong>Home</strong></a>
                    </li>
                    <li>
                        <a href="index.php?r=3">Profil</a>
                    </li>
                    <li>
                        <a href="index.php?r=4">Riwayat Pendidikan</a>
                    </li>
                    <li>
                        <a href="index.php?r=5">Gallery</a>
                    </li>
                    <li>
                        <a href="index.php?r=7">Laporan Katalog</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <?php if ($r==1) { ?> 
        <!-- Half Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"><img class="img-responsive" src="cap1.jpg" alt=""></div>
                <div class="carousel-caption">
                    <h2>Septiyan Eka Prastyio</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"><img class="img-responsive" src="cap2.jpg" alt=""></div>
                <div class="carousel-caption">
                    <h2>NIM :<br><br><i><b>2014 23 0047</b></i></h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"><img class="img-responsive" src="cap3.jpg" alt=""></div>
                <div class="carousel-caption">
                    <h2>Teknik Informatika</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>


    <?php } ?>
    <!-- Page Content -->
    <div class="container">
    <?php if ($r==1) { echo "<h1> Berita </h1>"; }?>
        <?php if ($r==4) { ?>
                <div><?php include('pendidikan.php'); ?></div>
        <?php } else { ?>               
        <div class="row">
        
            <!-- Blog Entries Column -->
            <div class="col-md-9">
            <?php if ($r==1) { ?>                
                <p> <?php include ("posting.php"); ?> </p>
            <?php } elseif ($r==2) { ?>                
                <p> <?php include ("manag_user.php"); ?> </p>
            <?php } elseif ($r==3) { ?>
                <!-- Second Blog Post -->
                <h2>
                    <h2>My PROFILE</h2>
                </h2>
                <p class="lead">
                    by Septiyan
                </p>
                <p><span class="glyphicon glyphicon-knight"></span> isikan keterangan di sini.</p>
                <hr>
                <img class="img-responsive" src="DSCN7471.jpg" alt="">
                <hr>
                <p>Sedikit perkenalan, nama saya "Septiyan Eka Prastyio" panggil saja Septiyan, saya salah satu mahasiswa di Darma Persada University dengan jurusan "Teknik Informatika" angkatan tahun 2014 malam, selain itu saya juga seorang karyanwan di perusahaan PMA swasta, mungkin itu saja dulu perkeenalan kita kali ini. bye ...</p>
                <hr>
                <div class="col-sm-4">
                    <h2>Contact</h2>
                    <address>
                        <strong>Septiyan Eka Prastyio</strong>
                        <br>Kp. Pulojahe RT/RW.007/010, Jatinegara, Cakung
                        <br>Jakarta Timur
                        <br>
                    </address>
                    <address>
                        <abbr title="Phone">P:</abbr>0818-0398-6390
                        <br>
                        <abbr title="Email">E:</abbr> <a href="mailto:#">septiyan79.se@gmail.com</a>
                    </address>
                </div>
                <!--<a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>-->

                
            <?php } elseif ($r==10) { ?>
               <div><?php include('tambah_user.php'); ?></div>       
            <?php } elseif ($r==6) { ?>
               <div><?php include('kelola_konten.php'); ?></div>
            <?php } elseif ($r==7) { ?>
                <div><?php include('edit_berita.php'); ?></div>
            <?php } elseif ($r==8) { ?>
                <div><?php include('tambah.php'); ?></div>
            <?php } elseif ($r==9) { ?>
                <div><?php include('posting_lengkap.php'); ?></div>
            <?php } elseif ($r==5) { ?>
                <div><?php include('gallery.php'); ?></div>
            <?php } elseif ($r==11) { ?>
                <div><?php include('edit_user.php'); ?></div>
            <?php } elseif ($r==12) { ?>
                <div><?php include('gallery.php'); ?></div>
            <?php } elseif ($r==13) { ?>
                <div><?php include('katalog.php'); ?></div>
            <?php } ?>
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3">

                <!-- Blog Search Well
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!- /.input-group
                </div>-->
                
                <!-- Blog Categories Well -->
                <div class="well wel">
                    <?php if (empty($_SESSION['user'])) { ?>
                    <h4>Login</h4>
                    <div class="row">
                        <div class = "judul">
                            <form role="form" method="post" action="proclogin.php">
                                <div class="form-group">
                                    <input type="text" class= "form-control" name="usname" placeholder="Username">
                                </div>

                                <div class="form-group">
                                    <input type="password" class= "form-control" name="pass" placeholder="password">
                                </div>
                                
                                <div class="form-group" align="center">
                                    <button type="submit" class="btn btn-primary btn-block btn-sm col-xs-2">Login</button>
                                </div>
                            </form>
                        </div>
                       
                    </div>



                    <?php } else { ?>
                        
                        
                    <!-- /.row -->
                    <?php $admin=$_SESSION['user'] ?>
                    <h3 align="center">Slamat datang <?php echo "$admin"; ?></h3>
                        <strong><i>
                        <li class="b" align="center"> <a href="index.php?r=6"> Kelola konten </a> </li>
                        <li class="b" align="center"> <a href="index.php?r=2"> Kelola User </a></li>
                        
                        <li class="b" align="center"> <a href="logout.php"> LOGOUT </a> </li>
                        </i></strong>

                    <?php } ?>
            
                    
                    <div>
                    <hr>
                    <?php
                    include ("visit.php");
                    include ("koneksi.php");
                    ?>
                    <div class='well'>
                        <h4 align='center'>Statictic Visitor</h4>
                        <?php
                        session_start();
                        $session_id=session_id();
                        
                        include ("koneksi.php");
                        $tanggal_sekarang=date('y-m-d');
                        $count=mysql_query("SELECT * FROM counter where tanggal like '$tanggal_sekarang' group by session");
                        $jumlah=mysql_num_rows($count);

                        //TOTAL KESELURUHAN
                        $total=mysql_query("SELECT * FROM counter group by session");
                        $total1=mysql_num_rows($total);
                        
                        //USER ONLINE
                        /*$ambil=mysql_query("SELECT * FROM online");
                        $row=mysql_fetch_array($ambil);
                        $on=$row['user_online'];*/
                        ?>
                        <h6> Pengunjung hari ini: <?php
        $fp=fopen("hits.txt", "r");
        $count=fread($fp, 1024);
        fclose($fp);
        $count=$count+1;
        echo "$count";
        $fp=fopen("hits.txt", "w");
        fwrite($fp, $count);
        fclose($fp);
        ?>
 </h6>
                        <h6> Total keseluruhan: <?php echo $count+20 ?> </h6>
                        <h6> User online: <?php echo $on ?> </h6>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>


        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>

        

            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; By Septiyan Eka Prastyio 2016</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
