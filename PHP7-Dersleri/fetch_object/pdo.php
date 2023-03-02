<?php
$baglan = new mysqli("localhost","root","","test_php7");
$baglan->set_charset("UTF-8");
if($baglan->connect_errno){
	echo "hata".$baglan->connect_error;
	die();
}
$sorgu = $baglan->query("select * from kisiler");
if($sorgu){
	$kayit = $sorgu->fetch_object();
	echo $kayit->id;
	echo $kayit->isim;
}
$baglan->close();
?>