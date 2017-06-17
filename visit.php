<?php
session_start();
$session_id=session_id();

include("koneksi.php");

$sql_session="SELECT * FROM counter where session='1'";
$query_session=mysql_query($sql_session);
$ada=mysql_num_rows($query_session);
$tanggal=date('Y-m-d H:i:s');
$ip=$_SERVER['REMOTE_ADDR'];
$page="index";


if(!$ada){
$sql_visit="INSERT into counter (tanggal_counter, session, ip_address, page) values ($tanggal, $session_id, $ip, $page)";
}

?>